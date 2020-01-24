<?php

namespace Webkul\UVDesk\CoreFrameworkBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\EventDispatcher\GenericEvent;
use Webkul\UVDesk\CoreFrameworkBundle\Entity\Ticket;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Webkul\UVDesk\CoreFrameworkBundle\Entity\Attachment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Webkul\UVDesk\CoreFrameworkBundle\Entity\TicketStatus;
use Webkul\UVDesk\CoreFrameworkBundle\Entity\Thread as TicketThread;
use Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events as CoreWorkflowEvents;

class Thread extends Controller
{
    public function saveThread($ticketId, Request $request)
    {
        $params = $request->request->all();
        $entityManager = $this->getDoctrine()->getManager();

        $ticket = $entityManager->getRepository(Ticket::class)->findOneById($ticketId);

        if (empty($ticket)) {
            throw new \Exception('Ticket not found', 404);
        } else if ('POST' !== $request->getMethod()) {
            throw new \Exception('Invalid Request', 403);
        }

        if (empty($params)) {
            return $this->redirect($request->headers->get('referer') ?: $this->generateUrl('helpdesk_member_ticket_collection'));
        } else if ('note' == $params['threadType'] && false == $this->get('user.service')->isAccessAuthorized('ROLE_AGENT_ADD_NOTE')) {
            // Insufficient user privilege to create a note
            throw new \Exception('Insufficient Permisions', 400);
        }

        // // Deny access unles granted ticket view permission
        // $this->denyAccessUnlessGranted('AGENT_VIEW', $ticket);

        // Check if reply content is empty
        $parsedMessage = trim(strip_tags($params['reply'], '<img>'));
        $parsedMessage = str_replace('&nbsp;', '', $parsedMessage);
        $parsedMessage = str_replace(' ', '', $parsedMessage);

        if (null == $parsedMessage) {
            $this->addFlash('warning', "Reply content cannot be left blank.");
        }

        // @TODO: Validate file attachments
        // if (true !== $this->get('file.service')->validateAttachments($request->files->get('attachments'))) {
        //     $this->addFlash('warning', "Invalid attachments.");
        // }

        $threadDetails = [
            'user' => $this->getUser(),
            'createdBy' => 'agent',
            'source' => 'website',
            'threadType' => strtolower($params['threadType']),
            'message' => str_replace(['&lt;script&gt;', '&lt;/script&gt;'], '', $params['reply']),
            'attachments' => $request->files->get('attachments')
        ];

        if(!empty($params['status'])){
            $ticketStatus = $entityManager->getRepository(TicketStatus::class)->findOneByCode($params['status']);
            $ticket->setStatus($ticketStatus);
        }
        if (isset($params['to'])) {
            $threadDetails['to'] = $params['to'];
        }

        if (isset($params['cc'])) {
            $threadDetails['cc'] = $params['cc'];
        }

        if (isset($params['cccol'])) {
            $threadDetails['cccol'] = $params['cccol'];
        }

        if (isset($params['bcc'])) {
            $threadDetails['bcc'] = $params['bcc'];
        }

        // Create Thread
        $thread = $this->get('ticket.service')->createThread($ticket, $threadDetails);
        // $this->addFlash('success', ucwords($params['threadType']) . " added successfully.");

        // @TODO: Remove Agent Draft Thread
        // @TODO: Trigger Thread Created Event

        // @TODO: Cross Review
        // check for thread types
        switch ($thread->getThreadType()) {
            case 'note':
                $event = new GenericEvent(CoreWorkflowEvents\Ticket\Note::getId(), [
                    'entity' =>  $ticket,
                    'thread' =>  $thread
                ]);

                $this->get('event_dispatcher')->dispatch('uvdesk.automation.workflow.execute', $event);

                // @TODO: Render response on the basis of event response (if propogation was stopped or not)
                $request->getSession()->getFlashBag()->set('success', 'Note added to ticket successfully.');
                break;
            case 'reply':
                $event = new GenericEvent(CoreWorkflowEvents\Ticket\AgentReply::getId(), [
                    'entity' =>  $ticket,
                    'thread' =>  $thread
                ]);

                $this->get('event_dispatcher')->dispatch('uvdesk.automation.workflow.execute', $event);

                // @TODO: Render response on the basis of event response (if propogation was stopped or not)
                $request->getSession()->getFlashBag()->set('success', 'Reply added to ticket successfully.');
                break;
            case 'forward':
                // Prepare headers
                $headers = ['References' => $ticket->getReferenceIds()];

                if (null != $ticket->currentThread->getMessageId()) {
                    $headers['In-Reply-To'] = $ticket->currentThread->getMessageId();
                }

                // Prepare attachments
                $attachments = $entityManager->getRepository(Attachment::class)->findByThread($thread);

                $projectDir = $this->get('kernel')->getProjectDir();
                $attachments = array_map(function($attachment) use ($projectDir) {
                return str_replace('//', '/', $projectDir . "/public" . $attachment->getPath());
                }, $attachments);

                // Forward thread to users
                try {
                    $messageId = $this->get('email.service')->sendMail($params['subject'] ?? ("Forward: " . $ticket->getSubject()), $thread->getMessage(), $thread->getReplyTo(), $headers, $ticket->getMailboxEmail(), $attachments ?? [], $thread->getCc() ?: [], $thread->getBcc() ?: []);
    
                    if (!empty($messageId)) {
                        $thread->setMessageId($messageId);
    
                        $entityManager->persist($createdThread);
                        $entityManager->flush();
                    }
                } catch (\Exception $e) {
                    // Do nothing ...
                    // @TODO: Log exception
                }

                // @TODO: Render response on the basis of event response (if propogation was stopped or not)
                $request->getSession()->getFlashBag()->set('success', 'Reply added to the ticket and forwarded successfully.');
                break;
            default:
                break;
        }

        // Check if ticket status needs to be updated
        $updateTicketToStatus = !empty($params['status']) ? (trim($params['status']) ?: null) : null;

        if (!empty($updateTicketToStatus) && $this->get('user.service')->isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS')) {
            $ticketStatus = $entityManager->getRepository(TicketStatus::class)->findOneById($updateTicketToStatus);

            if (!empty($ticketStatus) && $ticketStatus->getId() === $ticket->getStatus()->getId()) {
                $ticket->setStatus($ticketStatus);

                $entityManager->persist($ticket);
                $entityManager->flush();

                // @TODO: Trigger Ticket Status Updated Event
            }
        }

        // Redirect to either Ticket View | Ticket Listings
        if ('redirect' === $params['nextView']) {
            return $this->redirect($this->generateUrl('helpdesk_member_ticket_collection'));
        }
        
        return $this->redirect($this->generateUrl('helpdesk_member_ticket', ['ticketId' => $ticket->getId()]));
    }

    public function updateThreadXHR(Request $request)
    {
        $json = [];
        $em = $this->getDoctrine()->getManager();
        $content = json_decode($request->getContent(), true);

        if ($request->getMethod() == "PUT") {
            // $this->isAuthorized('ROLE_AGENT_EDIT_THREAD_NOTE');
            if (str_replace(' ','',str_replace('&nbsp;','',trim(strip_tags($content['reply'], '<img>')))) != "") {
                $thread = $em->getRepository(TicketThread::class)->find($request->attributes->get('threadId'));
                $thread->setMessage($content['reply']);
                $em->persist($thread);
                $em->flush();

                $ticket = $thread->getTicket();
                $ticket->currentThread = $thread;

                // Trigger agent reply event
                $event = new GenericEvent(CoreWorkflowEvents\Ticket\ThreadUpdate::getId(), [
                    'entity' =>  $ticket,
                ]);

                $this->get('event_dispatcher')->dispatch('uvdesk.automation.workflow.execute', $event);

                $json['alertMessage'] = $this->get('translator')->trans('Success ! Thread updated successfully.');
                $json['alertClass'] = 'success';
            } else {
                $json['alertMessage'] = $this->get('translator')->trans('Error ! Reply field can not be blank.');
                $json['alertClass'] = 'error';
            }
        }

        return new Response(json_encode($json), 200, ['Content-Type' => 'application/json']);
    }

    public function threadXHR(Request $request)
    {
        $json = array();
        $content = json_decode($request->getContent(), true);
        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() == "DELETE") {
            $thread = $em->getRepository(TicketThread::class)->findOneBy(array('id' => $request->attributes->get('threadId'), 'ticket' => $content['ticketId']));

            if ($thread) {
                // Trigger thread deleted event
                //  $event = new GenericEvent(CoreWorkflowEvents\Ticket\ThreadUpdate::getId(), [
                //     'entity' =>  $ticket,
                // ]);
                // $this->get('event_dispatcher')->dispatch('uvdesk.automation.workflow.execute', $event);

                $em->remove($thread);
                $em->flush();
                $json['alertClass'] = 'success';
                $json['alertMessage'] = $this->get('translator')->trans('Success ! Thread removed successfully.');
            } else {
                $json['alertClass'] = 'danger';
                $json['alertMessage'] = $this->get('translator')->trans('Error ! Invalid thread.');
            }
        } elseif ($request->getMethod() == "PATCH") {
            $thread = $em->getRepository(TicketThread::class)->findOneBy(array('id' => $request->attributes->get('threadId'), 'ticket' => $content['ticketId']));

            if ($thread) {
                if ($content['updateType'] == 'lock') {
                    $thread->setIsLocked($content['isLocked']);
                    $em->persist($thread);
                    $em->flush();

                    $json['alertMessage'] = $this->get('translator')->trans($content['isLocked'] ? 'Success ! Thread locked successfully.' : 'Success ! Thread unlocked successfully.');
                    $json['alertClass'] = 'success';
                } elseif ($content['updateType'] == 'bookmark') {
                    $thread->setIsBookmarked($content['bookmark']);
                    $em->persist($thread);
                    $em->flush();

                    $json['alertMessage'] = $this->get('translator')->trans($content['bookmark'] ? 'Success ! Thread pinned successfully.' : 'Success ! unpinned removed successfully.');
                    $json['alertClass'] = 'success';
                }
            } else {
                $json['alertClass'] = 'danger';
                $json['alertMessage'] = $this->get('translator')->trans('Error ! Invalid thread.');
            }
        }

        return new Response(json_encode($json), 200, ['Content-Type' => 'application/json']);
    }
}
