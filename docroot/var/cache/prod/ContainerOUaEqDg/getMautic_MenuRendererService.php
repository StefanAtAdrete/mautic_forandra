<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.menu_renderer' shared service.

return $this->services['mautic.menu_renderer'] = new \Mautic\CoreBundle\Menu\MenuRenderer(($this->services['knp_menu.matcher'] ?? $this->load('getKnpMenu_MatcherService.php')), ($this->services['mautic.helper.templating'] ?? ($this->services['mautic.helper.templating'] = new \Mautic\CoreBundle\Helper\TemplatingHelper(($this->services['kernel'] ?? $this->get('kernel', 1))))));
