<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.helper.template.exception' shared service.

return $this->services['mautic.helper.template.exception'] = new \Mautic\CoreBundle\Templating\Helper\ExceptionHelper((\dirname(__DIR__, 4).'/app'));
