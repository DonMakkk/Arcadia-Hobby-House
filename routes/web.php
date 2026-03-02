<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
Route::get('/a', function () {
    return view('auth.signup');
})->name('signup');
Route::get('/logins', function () {
    return view('auth.login');
})->name('login');

