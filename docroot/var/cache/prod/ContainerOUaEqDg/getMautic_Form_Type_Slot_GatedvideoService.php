<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.slot.gatedvideo' shared service.

return $this->services['mautic.form.type.slot.gatedvideo'] = new \Mautic\CoreBundle\Form\Type\GatedVideoType(($this->services['mautic.form.repository.form'] ?? $this->getMautic_Form_Repository_FormService()));
