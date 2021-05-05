<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController
};

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::post('/posts', [PostController::class, 'story'])->name('posts.story');

Route::get('/posts/action', [PostController::class, 'action'])->name('posts.action');

Route::get('/', function () {
    return view('welcome');
});
