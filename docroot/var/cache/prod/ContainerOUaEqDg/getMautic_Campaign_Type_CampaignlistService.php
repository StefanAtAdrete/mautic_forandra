<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.type.campaignlist' shared service.

return $this->services['mautic.campaign.type.campaignlist'] = new \Mautic\CampaignBundle\Form\Type\CampaignListType(($this->services['mautic.campaign.model.campaign'] ?? $this->load('getMautic_Campaign_Model_CampaignService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.security'] ?? $this->getMautic_SecurityService()));
