<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.leadlist_choices' shared service.

return $this->services['mautic.form.type.leadlist_choices'] = new \Mautic\LeadBundle\Form\Type\LeadListType(($this->services['mautic.lead.model.list'] ?? $this->getMautic_Lead_Model_ListService()));
