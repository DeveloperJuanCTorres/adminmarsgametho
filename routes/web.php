<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JuegoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/users', [AdminController::class, 'users']);
    Route::get('/juegos', [JuegoController::class, 'index']);
});
