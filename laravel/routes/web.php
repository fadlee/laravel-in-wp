<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$route_prefix = defined('LARAWP_PREFIX') ? '/'.LARAWP_PREFIX : '';

Route::get('/', function () {
    return view('welcome');
})->prefix($route_prefix);

Route::get('/wp', function () {
    echo '<pre>';
    global $wpdb;
    $user = wp_get_current_user();
    print_r($wpdb);
})->prefix($route_prefix);
