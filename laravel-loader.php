<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require LARAWP_PATH.'/laravel/vendor/autoload.php';
$app = require_once LARAWP_PATH.'/laravel/bootstrap/app.php';
$app->loadEnvironmentFrom('.env.php');

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
