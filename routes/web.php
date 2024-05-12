<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'data' => 'Hello',
    ]);
});

Route::get('/index', function () {
    return view('index', [
        'data' => 'Hello',
    ]);
})->name('index');
