<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.simple_success_failure_handler.main' shared service.

@trigger_error('The "security.authentication.simple_success_failure_handler.main" service is deprecated since Symfony 4.2.', E_USER_DEPRECATED);

$a = ($this->services['mautic.security.authentication_handler'] ?? $this->load('getMautic_Security_AuthenticationHandlerService.php'));

return new \Symfony\Component\Security\Http\Authentication\SimpleAuthenticationHandler(($this->services['mautic.user.form_authenticator'] ?? $this->load('getMautic_User_FormAuthenticatorService.php')), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler($a, ['login_path' => '/s/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false], 'main'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler($a, ['login_path' => '/s/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']), ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')));
