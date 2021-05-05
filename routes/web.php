<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController
};

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::get('/', function () {
    return view('welcome');
});
