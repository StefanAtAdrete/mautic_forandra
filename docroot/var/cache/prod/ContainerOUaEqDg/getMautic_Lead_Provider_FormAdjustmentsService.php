<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.provider.formAdjustments' shared service.

return $this->services['mautic.lead.provider.formAdjustments'] = new \Mautic\LeadBundle\Provider\FormAdjustmentsProvider(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
