<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.dashboard.subscriber' shared service.

return $this->services['mautic.form.dashboard.subscriber'] = new \Mautic\FormBundle\EventListener\DashboardSubscriber(($this->services['mautic.form.model.submission'] ?? $this->load('getMautic_Form_Model_SubmissionService.php')), ($this->services['mautic.form.model.form'] ?? $this->getMautic_Form_Model_FormService()), ($this->services['router'] ?? $this->getRouterService()));
