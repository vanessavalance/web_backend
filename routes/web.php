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
    return view('home');
    //return "Hello, selamat datang di STMIK TIME";
});

Route::get('/about', function () {
    return view('about');
    // return "ini adalah alamat about";
});

Route::get('/blog', function () {
    //return "ini adalah alamat blog";
});
