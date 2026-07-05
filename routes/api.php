<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/hiring-users', [App\Http\Controllers\HiringUserController::class, 'index']);
Route::post('/hiring-users', [App\Http\Controllers\HiringUserController::class, 'store']);
