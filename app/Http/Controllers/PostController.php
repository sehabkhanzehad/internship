<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        // $posts = Post::latest()->take(3)->get();
        $posts = Post::all();
        // get here all post with who user created this post with eager loading.
        // compact the post data to welcome view.

        return view('welcome', compact('posts'));
    }
}
