<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get();

        dd($posts);
        return view('admin.posts.index');
    }
}
