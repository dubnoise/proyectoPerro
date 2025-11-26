<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ImageLikeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('registro', [LoginController::class, 'registerForm']);
Route::post('registro', [LoginController::class, 'register'])->name('registro');

Route::get('login', [LoginController::class, 'loginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('user/{user}', [UserController::class, 'show'])->name('users.show');
Route::resource('users', UserController::class);

Route::get('info', [InfoController::class, 'index'])->name('info');
// Route::resource('info', InfoController::class);


Route::middleware(['auth'])->group(function () {
    Route::resource('images', ImageController::class);
});

Route::get('/users/{user}/images', [ImageController::class, 'userImages'])
    ->name('users.images');

Route::get('/images/{image}', [ImageController::class, 'show'])
->name('images.show');

Route::middleware('auth')->group(function () {
    // Otras rutas...
    Route::post('/images/{image}/toggle-like', [ImageController::class, 'toggleLike'])
        ->name('images.toggle_like');
});
