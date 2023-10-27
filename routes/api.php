<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HouseItemController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PromptController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

Route::get('/house', [HouseItemController::class, 'index']);
Route::get('/house/{id}', [HouseItemController::class, 'show']);
Route::post('/house', [HouseItemController::class, 'store']);
Route::put('/house/{id}', [HouseItemController::class, 'update']);
Route::delete('/house/{id}', [HouseItemController::class, 'destroy']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::put('/user/email/{id}', [UserController::class, 'email'])->name('user.email');
Route::put('/user/password/{id}', [UserController::class, 'password'])->name('user.password');
Route::delete('/user/{id}', [UserController::class, 'destroy']);

Route::get('/prompt', [PromptController::class, 'index']);
Route::get('/prompt/{id}', [PromptController::class, 'show']);
Route::post('/prompt', [PromptController::class, 'store']);
Route::put('/prompt/{id}', [PromptController::class, 'update']);
Route::delete('/prompt/{id}', [PromptController::class, 'destroy']);
