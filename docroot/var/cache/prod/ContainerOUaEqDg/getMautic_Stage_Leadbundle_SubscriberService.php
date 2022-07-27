<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.stage.leadbundle.subscriber' shared service.

return $this->services['mautic.stage.leadbundle.subscriber'] = new \Mautic\StageBundle\EventListener\LeadSubscriber(($this->services['mautic.lead.repository.stages_lead_log'] ?? $this->load('getMautic_Lead_Repository_StagesLeadLogService.php')), ($this->services['mautic.stage.repository.lead_stage_log'] ?? $this->load('getMautic_Stage_Repository_LeadStageLogService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['router'] ?? $this->getRouterService()));