<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.page.campaignbundle.subscriber' shared service.

return $this->services['mautic.page.campaignbundle.subscriber'] = new \Mautic\PageBundle\EventListener\CampaignSubscriber(($this->services['mautic.lead.model.lead'] ?? $this->getMautic_Lead_Model_LeadService()), ($this->services['mautic.page.helper.tracking'] ?? $this->load('getMautic_Page_Helper_TrackingService.php')), ($this->services['mautic.campaign.executioner.realtime'] ?? $this->load('getMautic_Campaign_Executioner_RealtimeService.php')));
