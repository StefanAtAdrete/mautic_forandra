<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.sync.notification.helper.owner_provider' shared service.

return $this->services['mautic.integrations.sync.notification.helper.owner_provider'] = new \Mautic\IntegrationsBundle\Sync\Notification\Helper\OwnerProvider(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['mautic.integrations.internal.object_provider'] ?? $this->load('getMautic_Integrations_Internal_ObjectProviderService.php')));
