<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'grapesjsbuilder.config' shared service.

return $this->services['grapesjsbuilder.config'] = new \MauticPlugin\GrapesJsBuilderBundle\Integration\Config(($this->services['mautic.integrations.helper'] ?? $this->getMautic_Integrations_HelperService()));
