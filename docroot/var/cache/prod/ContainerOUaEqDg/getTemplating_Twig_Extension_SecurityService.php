<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating.twig.extension.security' shared service.

return $this->services['templating.twig.extension.security'] = new \Mautic\CoreBundle\Templating\Twig\Extension\SecurityExtension(($this->services['mautic.helper.template.security'] ?? $this->load('getMautic_Helper_Template_SecurityService.php')));
