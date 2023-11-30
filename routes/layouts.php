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


Route::get('/checkout', function () {
    return view('user.cart.checkout');
})->name('checkout')->middleware('checkRole:user,merchant,admin');

Route::get('/diproses', function () {
    return view('user.pesanan.pesanan-diproses');
})->name('pesanan-diproses')->middleware('checkRole:user,merchant,admin');

require __DIR__.'/auth.php';
