<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.command.trigger' shared service.

return $this->services['mautic.campaign.command.trigger'] = new \Mautic\CampaignBundle\Command\TriggerCampaignCommand(($this->services['mautic.campaign.repository.campaign'] ?? $this->load('getMautic_Campaign_Repository_CampaignService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.campaign.executioner.kickoff'] ?? $this->load('getMautic_Campaign_Executioner_KickoffService.php')), ($this->services['mautic.campaign.executioner.scheduled'] ?? $this->load('getMautic_Campaign_Executioner_ScheduledService.php')), ($this->services['mautic.campaign.executioner.inactive'] ?? $this->load('getMautic_Campaign_Executioner_InactiveService.php')), ($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()), ($this->services['mautic.helper.template.formatter'] ?? $this->load('getMautic_Helper_Template_FormatterService.php')), ($this->services['mautic.lead.model.list'] ?? $this->getMautic_Lead_Model_ListService()), ($this->services['mautic.helper.segment.count.cache'] ?? $this->getMautic_Helper_Segment_Count_CacheService()));
