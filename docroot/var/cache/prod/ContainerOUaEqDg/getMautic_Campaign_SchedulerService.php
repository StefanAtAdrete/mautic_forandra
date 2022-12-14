<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.scheduler' shared service.

return $this->services['mautic.campaign.scheduler'] = new \Mautic\CampaignBundle\Executioner\Scheduler\EventScheduler(($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()), ($this->services['mautic.campaign.event_logger'] ?? $this->load('getMautic_Campaign_EventLoggerService.php')), ($this->services['mautic.campaign.scheduler.interval'] ?? $this->load('getMautic_Campaign_Scheduler_IntervalService.php')), ($this->services['mautic.campaign.scheduler.datetime'] ?? $this->load('getMautic_Campaign_Scheduler_DatetimeService.php')), ($this->services['mautic.campaign.event_collector'] ?? $this->load('getMautic_Campaign_EventCollectorService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))));
