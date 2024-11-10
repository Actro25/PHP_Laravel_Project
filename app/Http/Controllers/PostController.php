<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('authors.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    function store(Request $request){
        $request->validate([
            'title' => 'required|min:3|max:10',
            'content' => 'nullable|min:3|max:255'
        ]);
        /* $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save(); // insert into categories table */
 
        Post::create($request->all());
 
        return redirect('/authors');
     }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('authors.edit', compact('post'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect('/authors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();// видалити в БД
        return redirect('/authors');
    }
}
