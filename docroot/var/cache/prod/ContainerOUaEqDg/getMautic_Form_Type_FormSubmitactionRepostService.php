<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.form_submitaction_repost' shared service.

$this->services['mautic.form.type.form_submitaction_repost'] = $instance = new \Mautic\FormBundle\Form\Type\SubmitActionRepostType();

$instance->setFieldModel(($this->services['mautic.form.model.field'] ?? $this->getMautic_Form_Model_FieldService()));
$instance->setFormModel(($this->services['mautic.form.model.form'] ?? $this->getMautic_Form_Model_FormService()));

return $instance;
