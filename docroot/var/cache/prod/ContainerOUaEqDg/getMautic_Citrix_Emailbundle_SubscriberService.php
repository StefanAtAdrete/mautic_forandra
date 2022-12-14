<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.citrix.emailbundle.subscriber' shared service.

return $this->services['mautic.citrix.emailbundle.subscriber'] = new \MauticPlugin\MauticCitrixBundle\EventListener\EmailSubscriber(($this->services['mautic.citrix.model.citrix'] ?? $this->load('getMautic_Citrix_Model_CitrixService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['mautic.helper.templating'] ?? ($this->services['mautic.helper.templating'] = new \Mautic\CoreBundle\Helper\TemplatingHelper(($this->services['kernel'] ?? $this->get('kernel', 1))))));
