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

Route::get('/index', function () {
    return view('index');
});

Route::get('/aboutus', function () {
    return view('about');
});

Route::get('/activity', function () {
    return view('activity');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/done', function () {
    return view('done');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/form1', function () {
    return view('form1');
});

Route::get('/form2', function () {
    return view('form2');
});

Route::get('/kodepembayaran', function () {
    return view('kodepembayaran');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/nota', function () {
    return view('nota');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/process', function () {
    return view('process');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});