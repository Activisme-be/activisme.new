<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Contact\FrontController as ContactController;

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

Auth::routes(['register' => false]);

// Home routes
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('guest.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('guest.contact.store');
