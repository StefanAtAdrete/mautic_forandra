<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.sync.notification.handler_contact' shared service.

return $this->services['mautic.integrations.sync.notification.handler_contact'] = new \Mautic\IntegrationsBundle\Sync\Notification\Handler\ContactNotificationHandler(($this->services['mautic.integrations.sync.notification.writer'] ?? $this->load('getMautic_Integrations_Sync_Notification_WriterService.php')), ($this->services['mautic.lead.repository.lead_event_log'] ?? $this->load('getMautic_Lead_Repository_LeadEventLogService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['mautic.integrations.sync.notification.helper_user_summary_notification'] ?? $this->load('getMautic_Integrations_Sync_Notification_HelperUserSummaryNotificationService.php')));