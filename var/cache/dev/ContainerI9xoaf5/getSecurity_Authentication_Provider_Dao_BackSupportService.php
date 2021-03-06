<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.dao.back_support' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authentication\\Provider\\UserAuthenticationProvider.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\Authentication\\Provider\\DaoAuthenticationProvider.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\User\\UserCheckerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security-core\\User\\UserChecker.php';

return $this->privates['security.authentication.provider.dao.back_support'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($this->services['user.provider'] ?? $this->load('getUser_ProviderService.php')), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'back_support', ($this->privates['security.encoder_factory.generic'] ?? $this->load('getSecurity_EncoderFactory_GenericService.php')), true);
