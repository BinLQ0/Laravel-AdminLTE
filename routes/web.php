<?php

use Binlq0\LaravelAdminLte\Controller\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for this package.
|
*/

/** Login Page */
Route::get('/login', [LoginController::class, 'view'])
    ->name('login');

/** User Attempt Login */
Route::post('/login', [LoginController::class, 'attempt'])
    ->name('attemptLogin');

/** User Logout */
Route::get('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
