<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.basic.api' shared service.

$this->privates['security.authentication.listener.basic.api'] = $instance = new \Symfony\Component\Security\Http\Firewall\BasicAuthenticationListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'api', ($this->privates['fos_oauth_server.security.entry_point'] ?? $this->load('getFosOauthServer_Security_EntryPointService.php')), ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')));

$instance->setSessionAuthenticationStrategy(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('none'));

return $instance;
