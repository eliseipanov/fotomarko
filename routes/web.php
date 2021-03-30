<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\IndexPageController as IndexPagecontroller;
use App\Http\Controllers\BlogController as BlogController;
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
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    App::setLocale($locale);
    Route::get('/', 'IndexPagecontroller@index');
    Route::get('blog', 'BlogController@index');
});


Route::get('/', [IndexPagecontroller::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
