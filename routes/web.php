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
Route::get('/test', function () {
    return view('test');
})->name('test');


Route::get('/', function () {
    return view('user.beranda');
})->name('beranda');

Route::get('/profile', function () {
    return view('settings.profile');
})->name('profile');

Route::get('/message', function () {
    return view('user.message');
})->name('message');

Route::get('/cart', function () {
    return view('user.cart.keranjang');
})->name('keranjang');

Route::get('/order', function () {
    return view('user.pesanan.pesanan');
})->name('order');

Route::get('/account', function () {
    return view('settings.account');
})->middleware(['auth'])->name('account');


Route::get('/admin', function () { 
    return view('admin.dashboard'); 
})->middleware('checkRole:admin');

Route::get('/merchant', function () { 
    return view('merchant.dashboard'); 
})->middleware(['checkRole:merchant,admin']);

require __DIR__.'/auth.php';
