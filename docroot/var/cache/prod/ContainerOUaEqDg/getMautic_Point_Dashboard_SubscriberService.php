<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.point.dashboard.subscriber' shared service.

return $this->services['mautic.point.dashboard.subscriber'] = new \Mautic\PointBundle\EventListener\DashboardSubscriber(($this->services['mautic.point.model.point'] ?? $this->load('getMautic_Point_Model_PointService.php')));
