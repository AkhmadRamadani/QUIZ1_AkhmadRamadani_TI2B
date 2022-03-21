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
    return view('layouts.home');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/blog', function () {
    return view('layouts.blogs');
});


Route::get('/blog-detail', function () {
    return view('layouts.detail_blog');
});

Route::get('/portfolio', function () {
    return view('layouts.portfolio');
});

Route::get('/contacts', function () {
    return view('layouts.contact');
});
