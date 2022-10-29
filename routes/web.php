<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;


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
    return redirect('/home');
});

Route::get('/test', [HomeController::class, 'test']);


Route::controller(HomeController::class)->group(function () {

    Route::get('/home', 'show')->name('home');
});

Route::controller(CatalogController::class)->group(function () {

    Route::get('/catalog', 'show')->name('catalog');
});
