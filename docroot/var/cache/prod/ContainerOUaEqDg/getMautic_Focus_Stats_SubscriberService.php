<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.focus.stats.subscriber' shared service.

return $this->services['mautic.focus.stats.subscriber'] = new \MauticPlugin\MauticFocusBundle\EventListener\StatsSubscriber(($this->services['mautic.security'] ?? $this->getMautic_SecurityService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
