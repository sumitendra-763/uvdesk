<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'uvdesk.mailbox' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\uvdesk\\mailbox-component\\Services\\MailboxService.php';

return $this->services['uvdesk.mailbox'] = new \Webkul\UVDesk\MailboxBundle\Services\MailboxService($this, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
