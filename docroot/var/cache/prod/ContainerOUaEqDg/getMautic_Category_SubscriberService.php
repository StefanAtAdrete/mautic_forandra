<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.category.subscriber' shared service.

return $this->services['mautic.category.subscriber'] = new \Mautic\CategoryBundle\EventListener\CategorySubscriber(($this->services['mautic.helper.bundle'] ?? $this->getMautic_Helper_BundleService()), ($this->services['mautic.helper.ip_lookup'] ?? $this->getMautic_Helper_IpLookupService()), ($this->services['mautic.core.model.auditlog'] ?? $this->getMautic_Core_Model_AuditlogService()));
