<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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
    $response = Http::get('https://fotomarko.de/index.html', [
        'name' => 'M A R K O',
        'page' => 1,
    ]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
