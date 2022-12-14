<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache_clearer' shared service.

return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
    yield 0 => ($this->services['cache.system_clearer'] ?? $this->load('getCache_SystemClearerService.php'));
    yield 1 => ($this->privates['jms_serializer.cache.cache_clearer'] ?? $this->load('getJmsSerializer_Cache_CacheClearerService.php'));
    yield 2 => ($this->services['mautic.cache.clear_cache_subscriber'] ?? $this->load('getMautic_Cache_ClearCacheSubscriberService.php'));
}, 3));
