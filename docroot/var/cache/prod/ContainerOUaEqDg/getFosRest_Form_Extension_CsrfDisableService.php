<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.form.extension.csrf_disable' shared service.

return $this->privates['fos_rest.form.extension.csrf_disable'] = new \FOS\RestBundle\Form\Extension\DisableCSRFExtension(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 'ROLE_API', ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
