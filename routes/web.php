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
//  navbar
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/order-list', function () {
    return view('order-list');
});

// pages

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/contact', function () {
    return view('contact');
});

// product
Route::get('/sparklers', function () {
    return view('sparklers');
});
Route::get('/flower-pot', function () {
    return view('flower-pot');
});
Route::get('/ground-chakkar', function () {
    return view('ground-chakkar');
});
Route::get('/kids-gun', function () {
    return view('kids-gun');
});
Route::get('/rocket', function () {
    return view('rocket');
});
Route::get('/color-match', function () {
    return view('color-match');
});
Route::get('/skyshot', function () {
    return view('skyshot');
});
Route::get('/crackers-bom', function () {
    return view('crackers-bom');
});
Route::get('/crackers-bom', function () {
    return view('crackers-bom');
});
Route::get('/lar', function () {
    return view('lar');
});


// View product

Route::get('/kid-gun-2', function () {
    return view('kid-gun-2');
});
Route::get('/flowerpot-2', function () {
    return view('flowerpot-2');
});
Route::get('/sparkler-2', function () {
    return view('sparkler-2');
});
Route::get('/rocket-2', function () {
    return view('rocket-2');
});
Route::get('/sky-short-2', function () {
    return view('sky-short-2');
});
Route::get('/ground-chakkar-2', function () {
    return view('ground-chakkar-2');
});
Route::get('/lar-2', function () {
    return view('lar-2');
});

// dropdown view
Route::get('/flowerpot-3', function () {
    return view('flowerpot-3');
});
Route::get('/soundcrackers', function () {
    return view('soundcrackers');
});
Route::get('/kidscrackers', function () {
    return view('kidscrackers');
});

// user page
Route::get('/change-password', function () {
    return view('change-password');
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/account-details', function () {
    return view('account-details');
});
Route::get('/address', function () {
    return view('address');
});

Route::get('/try', function () {
    return view('try');
});
