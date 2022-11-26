<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\ContactController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'show')->name('home');
});

Route::controller(CatalogController::class)->group(function () {
    Route::get('/catalog', 'show')->name('catalog');
    Route::get('/product/{ID}', 'showProduct')->name('product');
});

Route::controller(AdmController::class)->group(function () {
    Route::get('/management', 'index')->name('index');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index')->name('aboutIndex');
});

Route::middleware('auth')->group(function () {
    Route::controller(ContactController::class)->group(function () {
        Route::get('/contact', 'index')->name('contactIndex');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
