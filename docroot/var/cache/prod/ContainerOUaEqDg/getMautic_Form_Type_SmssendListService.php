<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.smssend_list' shared service.

return $this->services['mautic.form.type.smssend_list'] = new \Mautic\SmsBundle\Form\Type\SmsSendType(($this->services['router'] ?? $this->getRouterService()));
