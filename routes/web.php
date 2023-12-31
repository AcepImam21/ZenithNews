<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\models\Category;
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

// Route::get('/', function () {
//     return view('home', [
//         "title" => 'Home',
//         "active" => "Home",
//     ]);
// });

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => 'Kontak',
        "active" => 'kontak',
    ]);
});

Route::get('/Kkategori', function () {
    return view('Kkategori', [
        "title" => 'Kategori',
        "active" => 'Kategori',
        'categories' => Category::all(),
    ]);
});

// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// });

Route::get('/', [HomeController::class, 'index']);

// Route::get('/dashboard', [DashboardController::class, 'dashboard']);
// Route::get('posts/{post:slug}', [HomeController::class, 'show']);

Route::get('post/{post:slug}', [HomeController::class, 'show']);

Route::get('/categories/{category:slug}', function (category $category) {
    return view('category', [
        'title' => "Postingan dengan kategori : $category->name",
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth');

Route::get('/authors/{author:username}', [AuthorController::class, 'show']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('registrasi')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
