<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('buy/{product_id}', [App\Http\Controllers\HomeController::class, 'buy'])->name('buy');
Route::post('confirm', [App\Http\Controllers\HomeController::class, 'confirm'])->name('confirm');
Route::get('checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
Route::post('pay', [App\Http\Controllers\HomeController::class, 'pay'])->name('pay');
Route::view('success', 'success')->name('success');
