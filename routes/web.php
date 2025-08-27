<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/create', function () {
    return view('products.create');
})->name('product.create');
Route::post('/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin', [ProductController::class, 'admin'])->name('product.admin');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/produto/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/accountform', function () {
    return view('user.login'); })->name('user.loginform');
Route::get('/user/{id}', [UserController::class, 'User'])->name('user.account');
Route::post('/register', [UserController::class, 'Register'])->name('user.register');
Route::post('/login', [UserController::class, 'Login'])->name('user.acess');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');