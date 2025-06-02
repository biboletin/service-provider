<?php

use Biboletin\ServiceProvider\Providers\ApplicationServiceProvider;

include __DIR__ . '/vendor/autoload.php';


$app = new ApplicationServiceProvider();
$app->register();
$app->boot();
