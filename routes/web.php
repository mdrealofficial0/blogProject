<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;





Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [AuthController::class, 'registrationPage']);
Route::post('/register', [AuthController::class, 'register'])->name('register');


Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::prefix('admin')->middleware('auth')->group(function () {
Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
Route::resource('posts', PostController::class);
Route::resource('categories', CategoryController::class);
});


