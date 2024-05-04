<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Feed\FeedController;
use App\Http\Controllers\ServiceController;


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
Route::get('/feeds', [FeedController::class, 'index'])->middleware('auth:sanctum');
Route::post('/feed/store', [FeedController::class, 'store'])->middleware('auth:sanctum');
Route::post('/feed/like/{feed_id}', [FeedController::class, 'likePost'])->middleware('auth:sanctum');
Route::post('/feed/comment/{feed_id}', [FeedController::class, 'comment'])->middleware('auth:sanctum');
Route::get('/feed/getcomments/{feed_id}', [FeedController::class, 'getComments'])->middleware('auth:sanctum');

Route::get('/ourservices', [ServiceController::class, 'index']);
Route::post('/ourservices', [ServiceController::class, 'store']);
Route::get('/ourservices/{id}', [ServiceController::class, 'show']);
Route::put('/ourservices/{id}', [ServiceController::class, 'update']);
Route::delete('/ourservices/{id}', [ServiceController::class, 'destroy']);

Route::get('/test', function () {
    return response(['message' => 'Hello World!'], 200);
});
Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);