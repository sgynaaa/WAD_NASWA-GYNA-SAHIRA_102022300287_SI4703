<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/produk', [ProductController::class, 'index']);
Route::get('/produk/tambah', [ProductController::class, 'create']);
Route::post('/produk/store', [ProductController::class, 'store']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/produk', function () {
    return 'Selamat datang!';
})->middleware('auth');

