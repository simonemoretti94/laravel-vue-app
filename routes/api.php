<?php

use App\Http\Controllers\PostApiController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/posts', [PostController::class, 'index']);

/**
 * index vue api test on post 'id' => 9
 */
Route::get('/posts/post6', [PostApiController::class, 'test']);

// Route::get('/posts/{post}', [PostController::class, 'show']);
