<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\ProfileController;
// use App\Http\Middleware\isLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product-by-category/{id_category}',[ProductController::class, 'index'])->name('product.by-category');
Route::get('/product-detail/{id_product}',[ProductController::class, 'detail'])->name('product.detail');
Route::get('/detail-produk', function () {
    return view('page.produk.detail');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
});

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile-update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile-change-password', [ProfileController::class, 'updatePassword'])->name('profile.change-password');
    Route::get('/order-show/{order_code}', [OrderController::class, 'show'])->name('order.show');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout.post');
});
