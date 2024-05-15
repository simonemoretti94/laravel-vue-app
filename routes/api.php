<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/posts', [PostController::class, 'index']);

// Route::group(['prefix' => 'SM94'], function () {
//     Route::apiResource('posts', PostController::class);
// });

Route::get('/posts/{$post}', [PostController::class, 'show']);
