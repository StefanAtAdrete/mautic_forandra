<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.api' shared service.

return $this->privates['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.authentication.listener.fos_oauth_server.api'] ?? $this->load('getSecurity_Authentication_Listener_FosOauthServer_ApiService.php'));
    yield 2 => ($this->privates['security.authentication.listener.mautic.api'] ?? $this->load('getSecurity_Authentication_Listener_Mautic_ApiService.php'));
    yield 3 => ($this->privates['security.authentication.listener.basic.api'] ?? $this->load('getSecurity_Authentication_Listener_Basic_ApiService.php'));
    yield 4 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), 'api', ($this->privates['fos_oauth_server.security.entry_point'] ?? $this->load('getFosOauthServer_Security_EntryPointService.php')), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api', 'security.user_checker', '.security.request_matcher.p4VlLPC', true, true, 'mautic.user.provider', NULL, 'fos_oauth_server.security.entry_point', NULL, NULL, [0 => 'fos_oauth', 1 => 'mautic_plugin_auth', 2 => 'http_basic'], NULL));
