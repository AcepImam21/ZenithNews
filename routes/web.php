<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('home', [
        "title" => 'Home',
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => 'Kontak',
    ]);
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('posts/{post:slug}', [HomeController::class, 'show']);



Route::get('/login', [LoginController::class, 'showLoginForm']);

Route::get('/register', [RegisterController::class, 'showRegisterForm']);