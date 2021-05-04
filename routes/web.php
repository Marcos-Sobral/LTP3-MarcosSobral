<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts', PostController::class);

Route::get('/', function () {
    return view('welcome');
});
