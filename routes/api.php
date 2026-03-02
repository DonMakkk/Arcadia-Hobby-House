<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// THIS ROUTES FOR SENDING UPDATING DATA. USE WEB.PHP FOR THE SENIDNG VIEW
Route::get('/test', function(){
    return view('layouts.default');
});


//Auth Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/shows', [AuthController::class, 'show'])->middleware('auth:sanctum');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
// ------------------------------------ ADMIN ROUTES HERE ----------------------------------------

// ------------------------------------ CUSTOMER ROUTES HERE -------------------------------------