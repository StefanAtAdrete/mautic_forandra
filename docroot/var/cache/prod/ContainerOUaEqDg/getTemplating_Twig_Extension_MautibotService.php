<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating.twig.extension.mautibot' shared service.

return $this->services['templating.twig.extension.mautibot'] = new \Mautic\CoreBundle\Templating\Twig\Extension\MautibotExtension(($this->services['mautic.helper.template.mautibot'] ?? ($this->services['mautic.helper.template.mautibot'] = new \Mautic\CoreBundle\Templating\Helper\MautibotHelper())));