<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.transport.momentum' shared service.

return $this->services['mautic.transport.momentum'] = new \Mautic\EmailBundle\Swiftmailer\Transport\MomentumTransport(($this->services['mautic.transport.momentum.callback'] ?? $this->load('getMautic_Transport_Momentum_CallbackService.php')), ($this->services['mautic.transport.momentum.facade'] ?? $this->load('getMautic_Transport_Momentum_FacadeService.php')));
