<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.membership.manager' shared service.

return $this->services['mautic.campaign.membership.manager'] = new \Mautic\CampaignBundle\Membership\MembershipManager(($this->services['mautic.campaign.membership.adder'] ?? $this->load('getMautic_Campaign_Membership_AdderService.php')), ($this->services['mautic.campaign.membership.remover'] ?? $this->load('getMautic_Campaign_Membership_RemoverService.php')), ($this->services['mautic.campaign.membership.event_dispatcher'] ?? $this->load('getMautic_Campaign_Membership_EventDispatcherService.php')), ($this->services['mautic.campaign.repository.lead'] ?? $this->load('getMautic_Campaign_Repository_LeadService.php')), ($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()));
