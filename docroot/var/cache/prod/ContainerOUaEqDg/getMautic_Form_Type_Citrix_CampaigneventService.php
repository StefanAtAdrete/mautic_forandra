<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.citrix.campaignevent' shared service.

return $this->services['mautic.form.type.citrix.campaignevent'] = new \MauticPlugin\MauticCitrixBundle\Form\Type\CitrixCampaignEventType(($this->services['mautic.citrix.model.citrix'] ?? $this->load('getMautic_Citrix_Model_CitrixService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
