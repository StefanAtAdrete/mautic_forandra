<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.sms.subscriber.contact_tracker' shared service.

return $this->services['mautic.sms.subscriber.contact_tracker'] = new \Mautic\SmsBundle\EventListener\TrackingSubscriber(($this->services['mautic.sms.repository.stat'] ?? $this->load('getMautic_Sms_Repository_StatService.php')));
