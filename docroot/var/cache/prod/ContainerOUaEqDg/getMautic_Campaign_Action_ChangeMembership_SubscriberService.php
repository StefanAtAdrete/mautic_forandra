<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.action.change_membership.subscriber' shared service.

return $this->services['mautic.campaign.action.change_membership.subscriber'] = new \Mautic\CampaignBundle\EventListener\CampaignActionChangeMembershipSubscriber(($this->services['mautic.campaign.membership.manager'] ?? $this->load('getMautic_Campaign_Membership_ManagerService.php')), ($this->services['mautic.campaign.model.campaign'] ?? $this->load('getMautic_Campaign_Model_CampaignService.php')));