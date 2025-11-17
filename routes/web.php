<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ImageController;
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

