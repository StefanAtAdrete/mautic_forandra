<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.pagebundle.subscriber' shared service.

return $this->services['mautic.form.pagebundle.subscriber'] = new \Mautic\FormBundle\EventListener\PageSubscriber(($this->services['mautic.form.model.form'] ?? $this->getMautic_Form_Model_FormService()), ($this->services['mautic.helper.token_builder.factory'] ?? $this->load('getMautic_Helper_TokenBuilder_FactoryService.php')), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.security'] ?? $this->getMautic_SecurityService()));
