<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic_integration.pipedrive.data_fetch' shared service.

return $this->services['mautic_integration.pipedrive.data_fetch'] = new \MauticPlugin\MauticCrmBundle\Command\FetchPipedriveDataCommand(($this->services['mautic.helper.integration'] ?? $this->getMautic_Helper_IntegrationService()), ($this->services['templating.helper.translator'] ?? $this->load('getTemplating_Helper_TranslatorService.php')));
