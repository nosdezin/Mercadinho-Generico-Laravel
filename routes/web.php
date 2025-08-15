<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/create', [ProductController::class,'create'])->name('product.create');
Route::post('/store', [ProductController::class,'store'])->name('product.store');
Route::get('/admin', [ProductController::class,'admin'])->name('product.admin');
