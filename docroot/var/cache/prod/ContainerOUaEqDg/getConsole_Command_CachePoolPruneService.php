<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_pool_prune' shared service.

$this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
    yield 'cache.app' => ($this->services['cache.app'] ?? $this->load('getCache_AppService.php'));
    yield 'api_rate_limiter_cache' => ($this->privates['api_rate_limiter_cache'] ?? $this->getApiRateLimiterCacheService());
}, 2));

$instance->setName('cache:pool:prune');

return $instance;
