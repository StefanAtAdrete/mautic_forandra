<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.email.broadcast.subscriber' shared service.

$a = ($this->services['mautic.email.model.email'] ?? $this->load('getMautic_Email_Model_EmailService.php'));

return $this->services['mautic.email.broadcast.subscriber'] = new \Mautic\EmailBundle\EventListener\BroadcastSubscriber($a, ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.lead.model.lead'] ?? $this->getMautic_Lead_Model_LeadService()), $a);