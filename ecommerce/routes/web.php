<?php

use App\Http\Livewire\DeleteProduct;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;




Route::get('/', function () {
    return view('welcome');
});


Route::resource('products', ProductController::class);
Route::resource('/base' ,DeleteProduct::class);

