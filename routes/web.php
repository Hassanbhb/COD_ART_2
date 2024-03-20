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

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// affiliate routes
Route::get('/affiliate/store', function () {
    return view('affiliate.store');
})->name('affiliate.store');

Route::get('/affiliate/product', function () {
    return view('affiliate.product');
})->name('affiliate.product');

Route::get('/affiliate/products', function(){
    return view('affiliate.products');
})->name('affiliate.products');

Route::get('/affiliate/cart', function () {
    return view('affiliate.cart');
})->name('affiliate.cart');

Route::get('/affiliate/checkout', function () {
    return view('affiliate.checkout');
})->name('affiliate.checkout');

Route::get('/affiliate/thankyou', function () {
    return view('affiliate.thankYouPage');
})->name('affiliate.thankYouPage');

Route::get('/affiliate/contact', function () {
    return view('affiliate.contact');
})->name('affiliate.contact');