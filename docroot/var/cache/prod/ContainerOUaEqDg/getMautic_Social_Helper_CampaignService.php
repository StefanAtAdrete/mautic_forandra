<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.social.helper.campaign' shared service.

return $this->services['mautic.social.helper.campaign'] = new \MauticPlugin\MauticSocialBundle\Helper\CampaignEventHelper(($this->services['mautic.helper.integration'] ?? $this->getMautic_Helper_IntegrationService()), ($this->services['mautic.page.model.trackable'] ?? $this->getMautic_Page_Model_TrackableService()), ($this->services['mautic.page.helper.token'] ?? $this->getMautic_Page_Helper_TokenService()), ($this->services['mautic.asset.helper.token'] ?? $this->getMautic_Asset_Helper_TokenService()), ($this->services['mautic.social.model.tweet'] ?? $this->load('getMautic_Social_Model_TweetService.php')));
