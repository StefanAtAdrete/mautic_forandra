<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.subscriber.contact_timeline_events' shared service.

return $this->services['mautic.integrations.subscriber.contact_timeline_events'] = new \Mautic\IntegrationsBundle\EventListener\TimelineSubscriber(($this->services['mautic.lead.repository.lead_event_log'] ?? $this->load('getMautic_Lead_Repository_LeadEventLogService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
