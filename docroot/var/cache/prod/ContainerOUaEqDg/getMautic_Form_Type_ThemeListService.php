<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.theme_list' shared service.

return $this->services['mautic.form.type.theme_list'] = new \Mautic\CoreBundle\Form\Type\ThemeListType(($this->services['mautic.helper.theme'] ?? $this->getMautic_Helper_ThemeService()));
