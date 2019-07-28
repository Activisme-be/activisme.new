<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Contact\FrontController as ContactController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\SupportController;

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

// Application policy routes
Route::get('/privacy-verklaring', [PolicyController::class, 'privacy'])->name('policies.privacy');
Route::get('/gebruikersvoorwaarden', [PolicyController::class, 'termsOfService'])->name('policies.terms-of-service');

// Support & payment routes
Route::get('/ondersteun-ons', [SupportController::class, 'index'])->name('support-us');

// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('guest.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('guest.contact.store');
