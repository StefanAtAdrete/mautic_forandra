<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.guzzle.client' shared service.

return $this->services['mautic.guzzle.client'] = ($this->services['mautic.guzzle.client.factory'] ?? ($this->services['mautic.guzzle.client.factory'] = new \Mautic\EmailBundle\Swiftmailer\Guzzle\ClientFactory()))->create();
