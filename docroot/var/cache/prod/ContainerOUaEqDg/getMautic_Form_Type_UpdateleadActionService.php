<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.updatelead_action' shared service.

return $this->services['mautic.form.type.updatelead_action'] = new \Mautic\LeadBundle\Form\Type\UpdateLeadActionType(($this->services['mautic.lead.model.field'] ?? $this->getMautic_Lead_Model_FieldService()));
