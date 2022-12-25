<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'product']);
Route::get('/product/{slug}', [PageController::class, 'productDetails']);

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class,'login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/produks', [ProductController::class, 'index']);
    Route::post('/produks', [ProductController::class, 'store']);
    Route::get('/produks/{slug}', [ProductController::class, 'show']);
    Route::post('/produks/{slug}', [ProductController::class, 'update']);
    Route::delete('/produks/{slug}', [ProductController::class, 'destroy']);


    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

