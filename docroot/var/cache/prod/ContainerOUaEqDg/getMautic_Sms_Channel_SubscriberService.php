<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.sms.channel.subscriber' shared service.

return $this->services['mautic.sms.channel.subscriber'] = new \Mautic\SmsBundle\EventListener\ChannelSubscriber(($this->services['mautic.sms.transport_chain'] ?? $this->load('getMautic_Sms_TransportChainService.php')));
