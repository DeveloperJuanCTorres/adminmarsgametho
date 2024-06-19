<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\ComissionController;
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
    Route::get('/ventas', [SellController::class, 'index']);
    Route::get('/comisiones', [ComissionController::class, 'index']);
});
