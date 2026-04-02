<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

//Auth Routes
Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/login', function () { return view('auth.login');})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/shows', [AuthController::class, 'show'])->middleware('auth:sanctum');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

//gawa ngvroute for view 
Route::get('/signup', function(){ return view('auth.signup'); })->name('signup');
Route::get('/products', [ProductController::class, 'products']);
Route::post('/searchProduct', [ProductController::class, 'search'])->name('searchProduct');
 Route::get('/product_detail/{id}', [ProductController::class, 'product_details'])->name('product_detail');
// ------------------------------------ CUSTOMER ROUTES HERE -------------------------------------
Route::prefix('user')->group(function(){
    Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');
     Route::get('/cart', [UserController::class, 'showCartPage'])->middleware('auth')->name('cart');
     Route::post('/cart/{id}/increase', [UserController::class, 'increase'])->name('cart.increase');
Route::post('/cart/{id}/decrease', [UserController::class, 'decrease'])->name('cart.decrease');
Route::delete('/cart/{id}', [UserController::class, 'remove'])->name('cart.remove');
    Route::match(['GET', 'POST'], '/addToCart/{id}', [UserController::class, 'addToCart'])->name('addToCart.addToCart');
    Route::get('/category/{category}', [ProductController::class, 'show'])->name('category.show');
  
    Route::get('/navigate/{section}', [UserController::class, 'navigate'])->name('navigate');
});

// ------------------------------------ ADMIN ROUTES HERE ----------------------------------------
Route::prefix('admin')->group(function(){
    Route::get('/orders', [UserController::class, 'orders']);
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/show_orders', [AdminController::class, 'show_orders']);
    Route::post('/insert_product', [AdminController::class, 'addProduct']);
    Route::put('/update_product/{product}', [AdminController::class, 'updateProduct']);
    Route::delete('/remove_product', [AdminController::class, 'removeProduct']);
});

