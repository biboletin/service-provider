<?php

namespace Biboletin\ServiceProvider\Providers;

use Biboletin\ServiceProvider\ServiceProvider;

class ApplicationServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        echo 'ApplicationServiceProvider registered.<br>' . PHP_EOL;
    }

    public function boot(): void
    {
        echo 'ApplicationServiceProvider booted.<br>' . PHP_EOL;
    }
}
