<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.reportbundle.subscriber' shared service.

return $this->services['mautic.form.reportbundle.subscriber'] = new \Mautic\FormBundle\EventListener\ReportSubscriber(($this->services['mautic.lead.model.company_report_data'] ?? $this->load('getMautic_Lead_Model_CompanyReportDataService.php')), ($this->services['mautic.form.repository.submission'] ?? $this->load('getMautic_Form_Repository_SubmissionService.php')));
