<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.transport.sendgrid_api.response' shared service.

return $this->services['mautic.transport.sendgrid_api.response'] = new \Mautic\EmailBundle\Swiftmailer\SendGrid\SendGridApiResponse(($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()));
