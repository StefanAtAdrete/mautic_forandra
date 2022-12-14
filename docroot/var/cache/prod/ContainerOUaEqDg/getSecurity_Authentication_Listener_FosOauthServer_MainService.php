<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.fos_oauth_server.main' shared service.

return $this->privates['security.authentication.listener.fos_oauth_server.main'] = new \Mautic\ApiBundle\Security\OAuth2\Firewall\OAuthListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['fos_oauth_server.server'] ?? $this->load('getFosOauthServer_ServerService.php')));
