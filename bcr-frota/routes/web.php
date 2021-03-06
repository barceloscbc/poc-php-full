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

Route::get('/', function () {
    return redirect('/swagger');
});


Route::get('/docs/swagger', function()
{
    require("../vendor/autoload.php");
    $openapi = \OpenApi\scan(__DIR__.'/../app');
    header('Content-Type: application/x-yaml');
    return $openapi->toYaml();
});
