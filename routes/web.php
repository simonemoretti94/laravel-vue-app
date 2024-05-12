<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //dd(Post::all());

    return view('index', [
        'data' => 'Welcome',
        'posts' => Post::all(),
    ]);
});

Route::resource('posts', PostController::class);
