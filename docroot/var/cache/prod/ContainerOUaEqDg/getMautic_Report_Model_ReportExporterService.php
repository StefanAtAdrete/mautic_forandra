<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.report.model.report_exporter' shared service.

return $this->services['mautic.report.model.report_exporter'] = new \Mautic\ReportBundle\Model\ReportExporter(($this->services['mautic.report.model.schedule_model'] ?? $this->load('getMautic_Report_Model_ScheduleModelService.php')), ($this->services['mautic.report.model.report_data_adapter'] ?? $this->load('getMautic_Report_Model_ReportDataAdapterService.php')), ($this->services['mautic.report.model.report_export_options'] ?? $this->load('getMautic_Report_Model_ReportExportOptionsService.php')), ($this->services['mautic.report.model.report_file_writer'] ?? $this->load('getMautic_Report_Model_ReportFileWriterService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
