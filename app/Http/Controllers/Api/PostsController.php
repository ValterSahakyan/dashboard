<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(9);
        return response()->json(compact('posts'));
    }

    public function postByTitle($title){
        $post = Post::where("title", $title)->first();
        return response()->json(compact('post'));
    }
}

