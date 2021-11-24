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

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});


Route::get('vegetables', function () {
    return view('vegetables');
});

Route::get('login', function () {
    return view('login');
});

Route::get('template', function () {
    return view('admin.template.base');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('produk', function () {
    return view('admin.produk');
});

Route::get('kategori', function () {
    return view('admin.kategori');
});

Route::get('profile', function () {
    return view('admin.profile');
});