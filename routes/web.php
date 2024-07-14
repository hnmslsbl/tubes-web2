<?php

use App\Http\Controllers\Landing;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::group(['middleware'=>'auth'], function(){
    Route::get('/admin', [DashboardController::class, '__invoke']);
    Route::get('/admin/delete/{id}', [AdminController::class, 'delete']);
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit']); // jalankan method edit
    Route::post('/admin/update/{id}', [AdminController::class, 'update']);
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/submit', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin', [DashboardController::class, '__invoke'])->name('admin')->middleware('auth');
    Route::resource('product',ProductController::class);
});


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/', [Landing::class, 'index']);
Route::get('/user', [Landing::class, 'PemanggilanProduk']);
Route::get('/detail/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/category/{id}', [ProductController::class, 'showCategory'])->name('category.show');

