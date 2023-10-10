<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
