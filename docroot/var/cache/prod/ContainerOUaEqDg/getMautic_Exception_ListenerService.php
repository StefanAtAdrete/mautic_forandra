<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.exception.listener' shared service.

return $this->services['mautic.exception.listener'] = new \Mautic\CoreBundle\EventListener\ExceptionListener(($this->services['router'] ?? $this->getRouterService()), 'MauticCoreBundle:Exception:show', ($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()));
