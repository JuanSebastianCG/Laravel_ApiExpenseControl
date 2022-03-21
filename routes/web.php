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

Route::get('/', function () {return view('welcome');})->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/account/{user}', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
    Route::resource('account', App\Http\Controllers\AccountController::class);

    Route::get('/graphics/{user}', [App\Http\Controllers\GraphicsController::class, 'index'])->name('graphics');

    Route::resource('expenses', App\Http\Controllers\ExpenseController::class);
    Route::resource('incomes', App\Http\Controllers\IncomeController::class);

    Route::resource('expensesCategories', App\Http\Controllers\ExpenseCategoryController::class);
    Route::resource('incomesCategories', App\Http\Controllers\IncomeCategoryController::class);

    Route::get('/dataFromGraphics', [App\Http\Controllers\GraphicsController::class, 'sendData'])->name('dataFromGraphics');
});


Route::get('/findCategories', [App\Http\Controllers\AccountController::class, 'findCategories'])->name('findCategories');

