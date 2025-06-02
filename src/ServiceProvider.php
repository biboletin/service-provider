<?php

namespace Biboletin\ServiceProvider;

use Biboletin\Interfaces\ServiceProviderInterface;

abstract class ServiceProvider implements ServiceProviderInterface
{
    
    abstract public function register(): void;

    public function boot(): void
    {
    }
}
