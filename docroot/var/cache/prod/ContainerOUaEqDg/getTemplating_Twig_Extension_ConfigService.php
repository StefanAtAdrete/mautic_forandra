<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating.twig.extension.config' shared service.

return $this->services['templating.twig.extension.config'] = new \Mautic\CoreBundle\Templating\Twig\Extension\ConfigExtension(($this->services['mautic.helper.template.config'] ?? $this->load('getMautic_Helper_Template_ConfigService.php')));
