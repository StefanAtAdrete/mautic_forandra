<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.focus.helper.token' shared service.

return $this->services['mautic.focus.helper.token'] = new \MauticPlugin\MauticFocusBundle\Helper\TokenHelper(($this->services['mautic.focus.model.focus'] ?? $this->getMautic_Focus_Model_FocusService()), ($this->services['router'] ?? $this->getRouterService()), ($this->services['mautic.security'] ?? $this->getMautic_SecurityService()));
