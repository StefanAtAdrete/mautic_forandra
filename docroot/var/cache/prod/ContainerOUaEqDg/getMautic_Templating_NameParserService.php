<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.templating.name_parser' shared service.

return $this->services['mautic.templating.name_parser'] = new \Mautic\CoreBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)));
