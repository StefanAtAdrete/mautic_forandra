<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.transport.sendgrid_api.calback' shared service.

return $this->services['mautic.transport.sendgrid_api.calback'] = new \Mautic\EmailBundle\Swiftmailer\SendGrid\Callback\SendGridApiCallback(($this->services['mautic.email.model.transport_callback'] ?? $this->load('getMautic_Email_Model_TransportCallbackService.php')));
