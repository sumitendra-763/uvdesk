<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'user.provider' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\User\\UserProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\Providers\\UserProvider.php';

return $this->services['user.provider'] = new \Webkul\UVDesk\CoreFrameworkBundle\Providers\UserProvider(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), $this, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));