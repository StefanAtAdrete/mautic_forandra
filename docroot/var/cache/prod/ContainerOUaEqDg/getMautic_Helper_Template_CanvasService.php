<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.helper.template.canvas' shared service.

return $this->services['mautic.helper.template.canvas'] = new \Mautic\CoreBundle\Templating\Helper\SidebarCanvasHelper(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
