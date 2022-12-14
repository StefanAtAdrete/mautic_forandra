<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.executioner.realtime' shared service.

return $this->services['mautic.campaign.executioner.realtime'] = new \Mautic\CampaignBundle\Executioner\RealTimeExecutioner(($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()), ($this->services['mautic.lead.model.lead'] ?? $this->getMautic_Lead_Model_LeadService()), ($this->services['mautic.campaign.repository.event'] ?? $this->load('getMautic_Campaign_Repository_EventService.php')), ($this->services['mautic.campaign.event_executioner'] ?? $this->load('getMautic_Campaign_EventExecutionerService.php')), ($this->services['mautic.campaign.executioner.decision'] ?? $this->load('getMautic_Campaign_Executioner_DecisionService.php')), ($this->services['mautic.campaign.event_collector'] ?? $this->load('getMautic_Campaign_EventCollectorService.php')), ($this->services['mautic.campaign.scheduler'] ?? $this->load('getMautic_Campaign_SchedulerService.php')), ($this->services['mautic.tracker.contact'] ?? $this->getMautic_Tracker_ContactService()), ($this->services['mautic.campaign.helper.decision'] ?? $this->load('getMautic_Campaign_Helper_DecisionService.php')));
