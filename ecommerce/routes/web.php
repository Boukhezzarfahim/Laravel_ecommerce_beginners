<?php

use App\Http\Livewire\DeleteProduct;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\CategoryController;




Route::get('/', [StoreController::class, 'index']);
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);


