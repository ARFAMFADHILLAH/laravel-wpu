<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => " All Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        // $post = Post::where('slug', $slug)->first();

        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
