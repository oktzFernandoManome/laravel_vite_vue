<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/products',[\App\Http\Controllers\ProductsController::class,'index'])->name('products');
