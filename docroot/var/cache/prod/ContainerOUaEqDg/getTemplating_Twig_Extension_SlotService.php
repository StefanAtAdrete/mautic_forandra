<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating.twig.extension.slot' shared service.

return $this->services['templating.twig.extension.slot'] = new \Mautic\CoreBundle\Templating\Twig\Extension\SlotExtension(($this->services['templating.helper.slots'] ?? $this->load('getTemplating_Helper_SlotsService.php')));
