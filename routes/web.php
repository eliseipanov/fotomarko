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

use Illuminate\Support\Facades\App;

Route::group(['prefix' => 'de', 'namespace' => 'Deutsch', 'middleware' => 'locale:de'], function() {
    Route::get('/', 'IndexPagecontroller@index')->name('Dehome');
    // ...
});

Route::group(['prefix' => 'en', 'namespace' => 'English', 'middleware' => 'locale:en'], function() {
    Route::get('/', 'IndexPagecontroller@index')->name('EnHome');
    // ...
});

Route::get('/', function() {
    return redirect()->route('DeHome');
});

/* Route::get('/', [IndexPagecontroller::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
 */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
