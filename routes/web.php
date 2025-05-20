<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MentorsController;
use App\Http\Controllers\KonekController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeamController;
// use App\Http\Middleware\isLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Product routes with slugs
Route::get('/service/{category_slug}', [ProductController::class, 'index'])->name('product.by-category');
Route::get('/service/{category_slug}/{product_slug}', [ProductController::class, 'detail'])->name('product.detail');

Route::get('/mentors', [MentorsController::class, 'index'])->name('mentors');
Route::get('/mentor/{slug}', [MentorsController::class, 'detail'])->name('mentor.detail');
Route::get('/konek', [KonekController::class, 'index'])->name('konek');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.detail');

// Team Routes
Route::get('/team/{slug}', [TeamController::class, 'show'])->name('team.detail');

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
    Route::post('/profile-upload-resume', [ProfileController::class, 'updateResume'])->name('profile.resume');
    // Route::post('/resume/set-default/{id}', [ProfileController::class, 'setDefault'])->name('resume.set-default');
    Route::get('/order/{orders_code}', [OrderController::class, 'show'])->name('order.show');
    Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order/{orders_code}/complete', [OrderController::class, 'markAsCompleted'])->name('order.complete');
    Route::get('/order/{orders_code}/cancel', [OrderController::class, 'cancel'])->name('order.cancel');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout.post');
});
