<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.citrix.submitaction' shared service.

return $this->services['mautic.form.type.citrix.submitaction'] = new \MauticPlugin\MauticCitrixBundle\Form\Type\CitrixActionType(($this->services['mautic.form.model.field'] ?? $this->getMautic_Form_Model_FieldService()));
