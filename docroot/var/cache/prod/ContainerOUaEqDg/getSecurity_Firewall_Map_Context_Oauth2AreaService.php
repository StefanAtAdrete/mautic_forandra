<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.oauth2_area' shared service.

$a = ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php'));

return $this->privates['security.firewall.map.context.oauth2_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.context_listener.2'] ?? $this->load('getSecurity_ContextListener_2Service.php'));
    yield 2 => ($this->privates['security.authentication.listener.form.oauth2_area'] ?? $this->load('getSecurity_Authentication_Listener_Form_Oauth2AreaService.php'));
    yield 3 => ($this->privates['security.authentication.listener.anonymous.oauth2_area'] ?? $this->load('getSecurity_Authentication_Listener_Anonymous_Oauth2AreaService.php'));
    yield 4 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), $a, 'oauth2_area', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, '/oauth/v2/authorize_login', false), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), false), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('oauth2_area', 'security.user_checker', '.security.request_matcher.mh4kgE6', true, false, 'mautic.user.provider', 'oauth2_area', 'security.authentication.form_entry_point.oauth2_area', NULL, NULL, [0 => 'form_login', 1 => 'anonymous'], NULL));
