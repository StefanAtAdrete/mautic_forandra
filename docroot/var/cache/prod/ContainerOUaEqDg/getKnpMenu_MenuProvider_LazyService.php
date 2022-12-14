<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.menu_provider.lazy' shared service.

return $this->privates['knp_menu.menu_provider.lazy'] = new \Knp\Menu\Provider\LazyProvider(['main' => function () {
    return ($this->services['mautic.menu.main'] ?? $this->load('getMautic_Menu_MainService.php'));
}, 'admin' => function () {
    return ($this->services['mautic.menu.admin'] ?? $this->load('getMautic_Menu_AdminService.php'));
}, 'extra' => function () {
    return ($this->services['mautic.menu.extra'] ?? $this->load('getMautic_Menu_ExtraService.php'));
}, 'profile' => function () {
    return ($this->services['mautic.menu.profile'] ?? $this->load('getMautic_Menu_ProfileService.php'));
}]);
