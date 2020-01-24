<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.form.renderer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormRendererInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormRenderer.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormRendererEngineInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractRendererEngine.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Form\\TwigRendererEngine.php';

return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
