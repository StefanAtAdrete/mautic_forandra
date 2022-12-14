<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.transport.sendgrid_api.facade' shared service.

return $this->services['mautic.transport.sendgrid_api.facade'] = new \Mautic\EmailBundle\Swiftmailer\SendGrid\SendGridApiFacade(($this->services['mautic.transport.sendgrid_api.sendgrid_wrapper'] ?? $this->load('getMautic_Transport_SendgridApi_SendgridWrapperService.php')), ($this->services['mautic.transport.sendgrid_api.message'] ?? $this->load('getMautic_Transport_SendgridApi_MessageService.php')), ($this->services['mautic.transport.sendgrid_api.response'] ?? $this->load('getMautic_Transport_SendgridApi_ResponseService.php')));
