<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

<<<<<<< HEAD

//NINCS DOLLÁR AZ ÚTVONALBAN
Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::post('/user', [UserController::class, 'store']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);

Route::get('/books', function (Request $request) {
    return $request->books();
})->middleware('auth:sanctum');
=======
Route::get('/users', [UserController::class, 'index']);
//kebabcase javasolt, nincs $ az útvonalban!
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'store']);
>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
