<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.notification.mobile_notification.report.subscriber' shared service.

return $this->services['mautic.notification.mobile_notification.report.subscriber'] = new \Mautic\NotificationBundle\EventListener\ReportSubscriber(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['mautic.lead.model.company_report_data'] ?? $this->load('getMautic_Lead_Model_CompanyReportDataService.php')), ($this->services['mautic.notification.repository.stat'] ?? $this->load('getMautic_Notification_Repository_StatService.php')));
