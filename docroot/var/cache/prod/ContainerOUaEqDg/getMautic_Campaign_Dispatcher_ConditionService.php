<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.campaign.dispatcher.condition' shared service.

return $this->services['mautic.campaign.dispatcher.condition'] = new \Mautic\CampaignBundle\Executioner\Dispatcher\ConditionDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
