<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('profile', [UserController::class,'my']);
    Route::get('cart', [CartController::class,'index']);
    Route::post('logout', [UserController::class,'logout'])->name('logout');
});

Route::post('login', [UserController::class,'login'])->name('login');
