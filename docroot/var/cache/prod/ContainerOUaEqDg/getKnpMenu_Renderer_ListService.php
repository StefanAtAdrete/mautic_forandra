<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.renderer.list' shared service.

return $this->privates['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(($this->services['knp_menu.matcher'] ?? $this->load('getKnpMenu_MatcherService.php')), [], 'UTF-8');
