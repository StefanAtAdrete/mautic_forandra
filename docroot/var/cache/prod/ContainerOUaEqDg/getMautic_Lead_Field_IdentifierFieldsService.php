<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.field.identifier_fields' shared service.

return $this->services['mautic.lead.field.identifier_fields'] = new \Mautic\LeadBundle\Field\IdentifierFields(($this->services['mautic.lead.field.fields_with_unique_identifier'] ?? $this->getMautic_Lead_Field_FieldsWithUniqueIdentifierService()), ($this->services['mautic.lead.field.field_list'] ?? $this->getMautic_Lead_Field_FieldListService()));
