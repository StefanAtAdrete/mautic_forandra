<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.sms.twilio.transport' shared service.

return $this->services['mautic.sms.twilio.transport'] = new \Mautic\SmsBundle\Integration\Twilio\TwilioTransport(($this->services['mautic.sms.twilio.configuration'] ?? $this->load('getMautic_Sms_Twilio_ConfigurationService.php')), ($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()));
