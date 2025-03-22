<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReigistertionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

Route::get('/', [CategoryController::class, 'index']);

Route::get('/register', [ReigistertionController::class, 'create']);

Route::post('/register', [ReigistertionController::class, 'store']);

Route::get('/login', [ReigistertionController::class, 'index']);

Route::post('/login', [ReigistertionController::class, 'login']);

Route::post('/logout', [ReigistertionController::class, 'logout'])->name('logout');


Route::resource('products', ProductController::class);

Route::resource('categories', CategoryController::class);

Route::resource('tasks', TaskController::class);


