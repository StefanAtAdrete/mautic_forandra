<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.form.config.sync_settings_field_mappings' shared service.

return $this->services['mautic.integrations.form.config.sync_settings_field_mappings'] = new \Mautic\IntegrationsBundle\Form\Type\IntegrationSyncSettingsFieldMappingsType(($this->services['monolog.logger.mautic'] ?? $this->getMonolog_Logger_MauticService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()));
