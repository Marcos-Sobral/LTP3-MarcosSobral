<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController
};

Route::get('/posts', PostController::class);

Route::get('/', function () {
    return view('welcome');
});
