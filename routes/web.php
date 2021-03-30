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

/* Route::get('/', function () {
    return Http::get('/https://fotomarko.de/index.html');
}); */

Route::get('/', [IndexPagecontroller::class, 'index']);

/*Route::get('/blog', function () {
    App::setLocale('en');
    return redirect()->action([BlogController::class, 'index']);
    }); */
Route::get('/blog', [BlogController::class, 'index']);

Route::group(['prefix' => 'de'], function ($locale) {

   App::setLocale('de');

   Route::get('/', [IndexPagecontroller::class, 'index']);
   Route::get('/blog', [BlogController::class, 'index']);

   // Route::get('/', function () {
   // App::setLocale('de');
   // return redirect()->action([IndexPagecontroller::class, 'index']);
   });

   //Route::get('/blog', function () {
   // App::setLocale('de');
   // return redirect()->action([BlogController::class, 'index']);
  // });

   // Route::get('/blog', [IndexPostController::class, 'index']);
   // Route::get('/pages/{slug}', [PageController::class, 'showpage']);
   // Route::get('/about', [IndexPostController::class, 'about']);
   // Route::get('/services', [IndexPostController::class, 'services']);
   // Route::get('/portfolio', [IndexPostController::class, 'portfolio']);
   // Route::get('/team', [IndexPostController::class, 'team']);
 //});

//Engish routes
Route::group(['prefix' => 'en'], function ($locale) {

    App::setLocale('en');
    

   Route::get('/', [IndexPagecontroller::class, 'index']);
   Route::get('/blog', [BlogController::class, 'index']);

    //Route::get('/', [IndexPagecontroller::class, 'index']);

   /*  Route::get('/', function () {
        App::setLocale('de');
     return redirect()->action([IndexPagecontroller::class, 'index']);
    });

    Route::get('/blog', function () {
        App::setLocale('de');
     return redirect()->action([BlogController::class, 'index']);
    }); */

    // Route::get('/blog', [IndexPostController::class, 'index']);
    // Route::get('/pages/{slug}', [PageController::class, 'showpage']);
    // Route::get('/about', [IndexPostController::class, 'about']);
    // Route::get('/services', [IndexPostController::class, 'services']);
    // Route::get('/portfolio', [IndexPostController::class, 'portfolio']);
    // Route::get('/team', [IndexPostController::class, 'team']);
  });



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
