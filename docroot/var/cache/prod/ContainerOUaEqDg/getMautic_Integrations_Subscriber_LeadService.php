<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.subscriber.lead' shared service.

return $this->services['mautic.integrations.subscriber.lead'] = new \Mautic\IntegrationsBundle\EventListener\LeadSubscriber(($this->services['mautic.integrations.repository.field_change'] ?? $this->load('getMautic_Integrations_Repository_FieldChangeService.php')), ($this->services['mautic.integrations.repository.object_mapping'] ?? $this->load('getMautic_Integrations_Repository_ObjectMappingService.php')), ($this->services['mautic.integrations.helper.variable_expresser'] ?? ($this->services['mautic.integrations.helper.variable_expresser'] = new \Mautic\IntegrationsBundle\Sync\VariableExpresser\VariableExpresserHelper())), ($this->services['mautic.integrations.helper.sync_integrations'] ?? $this->load('getMautic_Integrations_Helper_SyncIntegrationsService.php')));
