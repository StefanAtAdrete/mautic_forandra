<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.campaignevent_form_field_value' shared service.

return $this->services['mautic.form.type.campaignevent_form_field_value'] = new \Mautic\FormBundle\Form\Type\CampaignEventFormFieldValueType(($this->services['mautic.form.model.form'] ?? $this->getMautic_Form_Model_FormService()));
