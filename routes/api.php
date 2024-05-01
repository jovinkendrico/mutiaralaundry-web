<?php

use App\Http\Controllers\Api\v1\PostController;
use App\Http\Controllers\Api\v1\PaketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\CabangController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/api/v1/csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});

Route::controller(CabangController::class)->prefix('/api/v1/')->group(function () {
    Route::get('/cabang', 'index');
});

Route::controller(PaketController::class)->prefix('/api/v1/')->group(function () {
    Route::get('/paket', 'index');
});

Route::controller(PostController::class)->prefix('/api/v1/')->group(function () {
    Route::get('/pesanan/{id}', 'pesanan');
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::post('/transaksi', 'transaksi');
})->withoutMiddleware(['csrf']);
