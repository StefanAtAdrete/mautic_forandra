<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.message_send' shared service.

return $this->services['mautic.form.type.message_send'] = new \Mautic\ChannelBundle\Form\Type\MessageSendType(($this->services['router'] ?? $this->getRouterService()), ($this->services['mautic.channel.model.message'] ?? $this->load('getMautic_Channel_Model_MessageService.php')));
