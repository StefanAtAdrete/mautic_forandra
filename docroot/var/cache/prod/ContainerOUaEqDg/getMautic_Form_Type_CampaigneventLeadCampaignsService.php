<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.campaignevent_lead_campaigns' shared service.

return $this->services['mautic.form.type.campaignevent_lead_campaigns'] = new \Mautic\LeadBundle\Form\Type\CampaignEventLeadCampaignsType(($this->services['mautic.lead.model.list'] ?? $this->getMautic_Lead_Model_ListService()));
