<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        $posts = Post::all();

        return view('main', compact('posts'));
    }
    public function read(Post $post)
    {
        return view('reads', compact('post'));
    }
}
