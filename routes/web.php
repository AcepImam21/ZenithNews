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

Route::get('/', function () {       // artinya adalah metode request get (mengambil dari url lewat browser yang menjalankan /... contoh /about (mengakses halaman about))
    return view('welcome');         // disini me return/menampilkan sebuah view yang namanya welcome yang ada di folder views, karena secara default '/' mengarah ke file welcome.blade.php 
});

Route::get('/home', function () {       
    return view('home');          
});

Route::get('/about', function () {       
    return view('about');          
});
