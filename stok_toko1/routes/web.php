<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/produk', [ProductController::class, 'index']);
Route::get('/produk/tambah', [ProductController::class, 'create']);
Route::post('/produk/store', [ProductController::class, 'store']);

