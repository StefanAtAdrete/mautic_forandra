<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.transport.postmark' shared service.

$this->services['mautic.transport.postmark'] = $instance = new \Mautic\EmailBundle\Swiftmailer\Transport\PostmarkTransport();

$instance->setUsername($this->getEnv('nullable:resolve:MAUTIC_MAILER_USER'));
$instance->setPassword($this->getEnv('nullable:resolve:MAUTIC_MAILER_PASSWORD'));

return $instance;
