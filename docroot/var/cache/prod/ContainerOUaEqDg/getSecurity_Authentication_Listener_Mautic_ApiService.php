<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.mautic.api' shared service.

return $this->privates['security.authentication.listener.mautic.api'] = new \Mautic\UserBundle\Security\Firewall\AuthenticationListener(($this->services['mautic.security.authentication_handler'] ?? $this->load('getMautic_Security_AuthenticationHandlerService.php')), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'api', ($this->services['mautic.permission.repository'] ?? $this->getMautic_Permission_RepositoryService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
