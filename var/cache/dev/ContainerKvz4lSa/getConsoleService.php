<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Webkul\UVDesk\CoreFrameworkBundle\EventListener\Console\Console' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\uvdesk\\core-framework\\EventListener\\Console\\Console.php';

return $this->privates['Webkul\\UVDesk\\CoreFrameworkBundle\\EventListener\\Console\\Console'] = new \Webkul\UVDesk\CoreFrameworkBundle\EventListener\Console\Console($this, ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
