<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.company.list.type.form' shared service.

return $this->services['mautic.company.list.type.form'] = new \Mautic\LeadBundle\Form\Type\CompanyListType(($this->services['mautic.lead.model.company'] ?? $this->getMautic_Lead_Model_CompanyService()), ($this->services['mautic.helper.user'] ?? $this->getMautic_Helper_UserService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()));
