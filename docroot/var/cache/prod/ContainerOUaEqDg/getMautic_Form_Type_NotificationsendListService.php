<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.notificationsend_list' shared service.

return $this->services['mautic.form.type.notificationsend_list'] = new \Mautic\NotificationBundle\Form\Type\NotificationSendType(($this->services['router'] ?? $this->getRouterService()));
