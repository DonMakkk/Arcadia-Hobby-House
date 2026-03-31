<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// THIS ROUTES FOR SENDING UPDATING DATA. USE WEB.PHP FOR THE SENIDNG VIEW
Route::get('/', function(){
    return view('auth.login');
});


//Auth Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/shows', [AuthController::class, 'show'])->middleware('auth:sanctum');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// ------------------------------------ ADMIN ROUTES HERE ----------------------------------------
Route::prefix('admin')->group(function(){
    Route::get('/orders', [UserController::class, 'orders']);
    Route::get('/dashboard', [UserController::class, 'dashboard']);
    Route::get('/show_orders', [UserController::class, 'show_orders']);
    Route::post('/insert_product', [AdminController::class, 'addProduct']);
    Route::put('/update_product/{product}', [UserController::class, 'updateProduct']);
    Route::delete('/remove_product', [UserController::class, 'removeProduct']);
});
// ------------------------------------ CUSTOMER ROUTES HERE -------------------------------------