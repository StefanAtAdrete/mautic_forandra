<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.generated.columns.doctrine.listener' shared service.

return $this->services['mautic.generated.columns.doctrine.listener'] = new \Mautic\CoreBundle\EventListener\DoctrineGeneratedColumnsListener(($this->services['mautic.generated.columns.provider'] ?? $this->load('getMautic_Generated_Columns_ProviderService.php')), ($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()));
