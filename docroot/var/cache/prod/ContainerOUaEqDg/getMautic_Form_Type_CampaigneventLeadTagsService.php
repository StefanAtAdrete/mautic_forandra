<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.campaignevent_lead_tags' shared service.

return $this->services['mautic.form.type.campaignevent_lead_tags'] = new \Mautic\LeadBundle\Form\Type\CampaignEventLeadTagsType(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
