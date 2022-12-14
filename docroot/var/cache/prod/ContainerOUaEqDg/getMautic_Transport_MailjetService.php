<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.transport.mailjet' shared service.

$this->services['mautic.transport.mailjet'] = $instance = new \Mautic\EmailBundle\Swiftmailer\Transport\MailjetTransport(($this->services['mautic.email.model.transport_callback'] ?? $this->load('getMautic_Email_Model_TransportCallbackService.php')), $this->getEnv('bool:resolve:MAUTIC_MAILER_MAILJET_SANDBOX'), $this->getEnv('nullable:resolve:MAUTIC_MAILER_MAILJET_SANDBOX_DEFAULT_MAIL'));

$instance->setUsername($this->getEnv('nullable:resolve:MAUTIC_MAILER_USER'));
$instance->setPassword($this->getEnv('nullable:resolve:MAUTIC_MAILER_PASSWORD'));

return $instance;
