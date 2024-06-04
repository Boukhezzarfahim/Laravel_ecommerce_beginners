<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Editor\EditorController;
use App\Http\Controllers\Admin\CategoryController;






Route::get('/', [StoreController::class, 'index']);


Route::middleware(['auth','editor'])->group(function(){
    Route::get('/editor/dashboard', [EditorController::class, 'index'])->name('editor_dashboard');
});

Route::middleware(['auth','admin'])->group(function(){
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin_dashboard');
});

Auth::routes();

