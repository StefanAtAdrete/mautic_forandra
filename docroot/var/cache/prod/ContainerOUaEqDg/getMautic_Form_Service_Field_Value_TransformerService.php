<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.service.field.value.transformer' shared service.

return $this->services['mautic.form.service.field.value.transformer'] = new \Mautic\FormBundle\Event\Service\FieldValueTransformer(($this->services['router'] ?? $this->getRouterService()));
