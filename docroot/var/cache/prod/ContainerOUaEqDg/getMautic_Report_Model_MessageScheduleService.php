<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.report.model.message_schedule' shared service.

return $this->services['mautic.report.model.message_schedule'] = new \Mautic\ReportBundle\Scheduler\Model\MessageSchedule(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.helper.file_properties'] ?? ($this->services['mautic.helper.file_properties'] = new \Mautic\CoreBundle\Helper\FileProperties())), ($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))), ($this->services['router'] ?? $this->getRouterService()));
