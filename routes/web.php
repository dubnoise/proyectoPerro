<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\WalkZoneController;
use App\Http\Controllers\ImageLikeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('registro', [LoginController::class, 'registerForm']);
Route::post('registro', [LoginController::class, 'register'])->name('registro');

Route::get('login', [LoginController::class, 'loginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('user/{user}', [UserController::class, 'show'])->name('users.show');
Route::resource('users', UserController::class);

Route::get('info', [InfoController::class, 'index'])->name('info');
/* =======================
      INFORMACIÓN
======================= */
Route::prefix('info')->name('info.')->group(function () {

    // Salud
    Route::prefix('salud')->name('salud.')->group(function () {
        Route::view('/enfermedades', 'info.salud.enfermedades')->name('enfermedades');
        Route::view('/veterinario', 'info.salud.veterinario')->name('veterinario');
        Route::view('/edades', 'info.salud.edades')->name('edades');
        Route::view('/vacunas', 'info.salud.vacunas')->name('vacunas');
    });

    // Alimentación
    Route::prefix('alimentacion')->name('alimentacion.')->group(function () {
        Route::view('/tipos', 'info.alimentacion.tipos')->name('tipos');
        Route::view('/dieta', 'info.alimentacion.dieta')->name('dieta');
        Route::view('/prohibidos', 'info.alimentacion.prohibidos')->name('prohibidos');
        Route::view('/habitos', 'info.alimentacion.habitos')->name('habitos');
    });

    // Comportamiento
    Route::prefix('comportamiento')->name('comportamiento.')->group(function () {
        Route::view('/ordenes', 'info.comportamiento.ordenes')->name('ordenes');
        Route::view('/socializacion', 'info.comportamiento.socializacion')->name('socializacion');
        Route::view('/ansiedad', 'info.comportamiento.ansiedad')->name('ansiedad');
        Route::view('/juegos', 'info.comportamiento.juegos')->name('juegos');
    });

    // Cuidado
    Route::prefix('cuidado')->name('cuidado.')->group(function () {
        Route::view('/bano', 'info.cuidado.bano')->name('bano');
        Route::view('/unas', 'info.cuidado.unas')->name('unas');
        Route::view('/limpieza', 'info.cuidado.limpieza')->name('limpieza');
        Route::view('/accesorios', 'info.cuidado.accesorios')->name('accesorios');
    });

    // Razas
    Route::prefix('razas')->name('razas.')->group(function () {
        Route::view('/perros', 'info.razas.perros')->name('perros');
        Route::view('/gatos', 'info.razas.gatos')->name('gatos');
        Route::view('/otros', 'info.razas.otros')->name('otros');
    });

    // Emergencias
    Route::prefix('emergencias')->name('emergencias.')->group(function () {
        Route::view('/golpe-calor', 'info.emergencias.golpe-calor')->name('golpe-calor');
        Route::view('/toxicos', 'info.emergencias.toxicos')->name('toxicos');
        Route::view('/senales', 'info.emergencias.senales')->name('senales');
        Route::view('/primeros-auxilios', 'info.emergencias.primeros-auxilios')->name('primeros-auxilios');
    });

});

// Route::resource('info', InfoController::class);


Route::middleware('auth')->group(function () {
    Route::resource('images', ImageController::class)
        ->except(['show']);
});

Route::get('/{user:username}/images', [ImageController::class, 'userImages'])
    ->name('users.images');

Route::get('/images/{image}', [ImageController::class, 'show'])
->name('images.show');

Route::middleware('auth')->group(function () {
    // Otras rutas...
    Route::post('/images/{image}/toggle-like', [ImageController::class, 'toggleLike'])
        ->name('images.toggle_like');
});

// comentarios
Route::post('/images/{id}/comments', [CommentController::class, 'store'])
     ->name('comments.store')->middleware('auth');

Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])
     ->name('comments.destroy')->middleware('auth');

// Vista del mapa
Route::get('/mapa/zona', [WalkZoneController::class, 'index'])->name('map.zone');
Route::post('/mapa/zona/guardar', [WalkZoneController::class, 'store'])->name('map.zone.store')->middleware('auth');

Route::get('/{user}', [UserController::class, 'show'])
    ->name('users.show');
