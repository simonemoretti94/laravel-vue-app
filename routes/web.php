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

// Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts.index');
// Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
// Route::post('/admin/posts', [PostController::class, 'store'])->name('admin.posts.store');
Route::get('/admin/posts/{Post}', [PostController::class, 'show']);
// Route::get('/admin/posts/{Post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
// Route::put('/admin/posts/{Post}', [PostController::class, 'update'])->name('admin.posts.update');
// Route::delete('/admin/posts/{Post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
