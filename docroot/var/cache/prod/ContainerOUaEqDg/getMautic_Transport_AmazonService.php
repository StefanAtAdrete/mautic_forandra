<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.transport.amazon' shared service.

$this->services['mautic.transport.amazon'] = $instance = new \Mautic\EmailBundle\Swiftmailer\Transport\AmazonTransport($this->getEnv('nullable:resolve:MAUTIC_MAILER_AMAZON_REGION'), $this->getEnv('nullable:resolve:MAUTIC_MAILER_AMAZON_OTHER_REGION'), $this->getEnv('nullable:resolve:MAUTIC_MAILER_PORT'), ($this->services['mautic.transport.amazon.callback'] ?? $this->load('getMautic_Transport_Amazon_CallbackService.php')));

$instance->setUsername($this->getEnv('nullable:resolve:MAUTIC_MAILER_USER'));
$instance->setPassword($this->getEnv('nullable:resolve:MAUTIC_MAILER_PASSWORD'));

return $instance;
