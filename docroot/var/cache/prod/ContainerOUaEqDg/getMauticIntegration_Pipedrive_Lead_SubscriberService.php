<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic_integration.pipedrive.lead.subscriber' shared service.

return $this->services['mautic_integration.pipedrive.lead.subscriber'] = new \MauticPlugin\MauticCrmBundle\EventListener\LeadSubscriber(($this->services['mautic.helper.integration'] ?? $this->getMautic_Helper_IntegrationService()), ($this->services['mautic_integration.pipedrive.export.lead'] ?? $this->load('getMauticIntegration_Pipedrive_Export_LeadService.php')));
