<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.fixture.form' shared service.

return $this->services['mautic.form.fixture.form'] = new \Mautic\FormBundle\DataFixtures\ORM\LoadFormData(($this->services['mautic.form.model.form'] ?? $this->getMautic_Form_Model_FormService()), ($this->services['mautic.form.model.field'] ?? $this->getMautic_Form_Model_FieldService()), ($this->services['mautic.form.model.action'] ?? $this->getMautic_Form_Model_ActionService()));
