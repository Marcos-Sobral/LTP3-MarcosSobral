<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get();
        return view('admin.posts.index', compact('posts'));
    }

    public function action(){
        return view('admin.posts.action');
    }  

    public function story(Request $request){
        $post = Post::action($request->all());
        return 'ok';
    }    
}
