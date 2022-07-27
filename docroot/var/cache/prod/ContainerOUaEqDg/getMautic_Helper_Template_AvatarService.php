<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.helper.template.avatar' shared service.

return $this->services['mautic.helper.template.avatar'] = new \Mautic\LeadBundle\Templating\Helper\AvatarHelper(($this->services['templating.helper.assets'] ?? $this->load('getTemplating_Helper_AssetsService.php')), ($this->services['mautic.helper.paths'] ?? $this->getMautic_Helper_PathsService()), ($this->services['mautic.helper.template.gravatar'] ?? $this->load('getMautic_Helper_Template_GravatarService.php')), ($this->services['mautic.helper.template.default_avatar'] ?? $this->load('getMautic_Helper_Template_DefaultAvatarService.php')));