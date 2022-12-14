<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.merger' shared service.

return $this->services['mautic.lead.merger'] = new \Mautic\LeadBundle\Deduplicate\ContactMerger(($this->services['mautic.lead.model.lead'] ?? $this->getMautic_Lead_Model_LeadService()), ($this->services['mautic.lead.repository.merged_records'] ?? $this->getMautic_Lead_Repository_MergedRecordsService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()));
