<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\IndexPageController as IndexPagecontroller;
use App\Http\Controllers\BlogController as BlogController;
use App\Http\Controllers\TestMail;
use App\Http\Controllers\PanoramaController;
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
    Route::get('/', [IndexPagecontroller::class, 'index'])->name('dehome');
    Route::get('blog', [BlogController::class, 'index'])->name('deblog');
    // ...
    $pano = '';
    Route::get('panoramas/{pano}', [PanoramaController::class, 'showpano'])->name('depano');
    Route::get('configpano/{id}', [PanoramaController::class, 'panoconfig']);
});

Route::group(['prefix' => 'en', 'namespace' => 'English', 'middleware' => 'locale:en'], function() {
    Route::get('/', [IndexPagecontroller::class, 'index'])->name('enhome');
    Route::get('blog', [BlogController::class, 'index'])->name('enblog');
    Route::get('panoramas/{pano}', [PanoramaController::class, 'showpano'])->name('enpano');
    Route::get('configpano/{id}', [PanoramaController::class, 'panoconfig']);
    // ...
});

Route::get('/', function() {
    return redirect()->route('dehome');
});

Route::post('sendmail', [TestMail::class, 'sendmail']);
/* Route::get('/', [IndexPagecontroller::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
 */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
