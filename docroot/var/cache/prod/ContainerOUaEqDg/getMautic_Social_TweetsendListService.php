<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.social.tweetsend_list' shared service.

return $this->services['mautic.social.tweetsend_list'] = new \MauticPlugin\MauticSocialBundle\Form\Type\TweetSendType(($this->services['router'] ?? $this->getRouterService()));
