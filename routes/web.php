<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\IndexPagecontroller as IndexPagecontroller;
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
    return Http::get('/https://fotomarko.de/index.html');
});
Route::get('/', [IndexPagecontroller::class, 'index']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
