<?php

use App\Http\Controllers\Api\Auth\CustomLoginController;
use App\Http\Controllers\Api\Auth\CustomRegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/custom-login', [CustomLoginController::class, 'login']);
Route::post('/custom-register', [CustomRegisterController::class, 'register']);