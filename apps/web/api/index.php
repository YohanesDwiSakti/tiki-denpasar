<?php

foreach ([
    '/tmp/finproppt/cache',
    '/tmp/finproppt/sessions',
    '/tmp/finproppt/views-price-calc-v2',
] as $directory) {
    if (! is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

putenv('CACHE_STORE=array');
putenv('SESSION_DRIVER=cookie');
putenv('VIEW_COMPILED_PATH=/tmp/finproppt/views-price-calc-v2');
putenv('APP_PACKAGES_CACHE=/tmp/finproppt/cache/packages.php');
putenv('APP_SERVICES_CACHE=/tmp/finproppt/cache/services.php');
putenv('APP_CONFIG_CACHE=/tmp/finproppt/cache/config.php');
putenv('APP_ROUTES_CACHE=/tmp/finproppt/cache/routes.php');
putenv('APP_EVENTS_CACHE=/tmp/finproppt/cache/events.php');
$_ENV['CACHE_STORE'] = 'array';
$_ENV['SESSION_DRIVER'] = 'cookie';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/finproppt/views-price-calc-v2';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/finproppt/cache/packages.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/finproppt/cache/services.php';
$_ENV['APP_CONFIG_CACHE'] = '/tmp/finproppt/cache/config.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/finproppt/cache/routes.php';
$_ENV['APP_EVENTS_CACHE'] = '/tmp/finproppt/cache/events.php';

require __DIR__ . '/../public/index.php';
