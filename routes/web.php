<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account/{user}', App\Http\Controllers\PostController::class)->name('account')->middleware('auth');

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('expenses', App\Http\Controllers\AccountController::class)->middleware('auth');
    Route::resource('incomes', App\Http\Controllers\AccountController::class)->middleware('auth');
});
