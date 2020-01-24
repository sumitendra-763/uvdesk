<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'uvdesk.automations.workflows' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\uvdesk\\automation-bundle\\EventListener\\WorkflowListener.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\automation-bundle\\Workflow\\Event.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Agent\\Create.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Agent\\Delete.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\UserForgotPassword.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Agent\\ForgotPassword.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Agent\\Update.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Customer\\Create.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Customer\\Delete.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Customer\\ForgotPassword.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Customer\\Update.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\Agent.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\AgentReply.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\Collaborator.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\CollaboratorReply.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\Create.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\CustomerReply.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\Delete.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\Group.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\Note.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\Priority.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\Status.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\Team.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\ThreadUpdate.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Events\\Ticket\\Type.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\automation-bundle\\Workflow\\Action.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Agent\\MailAgent.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Agent\\TransferTickets.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Customer\\MailCustomer.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\MailUser.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\AddNote.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\MailAgent.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\MailCustomer.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\MailGroup.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\MailLastCollaborator.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\MailTeam.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\MarkSpam.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\UpdateAgent.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\UpdateGroup.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\UpdatePriority.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\UpdateStatus.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\UpdateTag.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\UpdateTeam.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Workflow\\Actions\\Ticket\\UpdateType.php';

$a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

$this->services['uvdesk.automations.workflows'] = $instance = new \Webkul\UVDesk\AutomationBundle\EventListener\WorkflowListener($this, $a);

$b = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Agent\Create($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Agent\Delete($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Agent\ForgotPassword($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Agent\Update($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Customer\Create($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Customer\Delete($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Customer\ForgotPassword($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Customer\Update($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\Agent($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\AgentReply($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\Collaborator($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\CollaboratorReply($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\Create($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\CustomerReply($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\Delete($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\Group($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\Note($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\Priority($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\Status($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\Team($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\ThreadUpdate($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket\Type($this, $b, $a));
$instance->registerWorkflowEvent(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\UserForgotPassword($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Agent\MailAgent($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Agent\TransferTickets($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Customer\MailCustomer($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\MailUser($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\AddNote($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\MailAgent($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\MailCustomer($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\MailGroup($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\MailLastCollaborator($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\MailTeam($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\MarkSpam($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\UpdateAgent($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\UpdateGroup($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\UpdatePriority($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\UpdateStatus($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\UpdateTag($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\UpdateTeam($this, $b, $a));
$instance->registerWorkflowAction(new \Webkul\UVDesk\CoreFrameworkBundle\Workflow\Actions\Ticket\UpdateType($this, $b, $a));

return $instance;
