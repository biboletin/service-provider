<?php

namespace Biboletin\ServiceProvider;

use Biboletin\Interfaces\ServiceProviderInterface;

abstract class ServiceProvider implements ServiceProviderInterface
{
    protected $container;

    abstract public function register(): void;

    public function boot(): void
    {
    }
    
    public function getContainer()
    {
        return $this->container;
    }
    
    public function setContainer($container)
    {
        $this->container = $container;
    }
    
    public function get($key)
    {
        return $this->container->get($key);
    }
    
    public function set($key, $value)
    {
        $this->container->set($key, $value);
    }
    
    public function has($key)
    {
        return $this->container->has($key);
    }
    
    public function remove($key)
    {
        $this->container->remove($key);
    }
    
    
}
