@extends('layouts.app')

@section('content')
<style>
    .post {
        border: 1px solid #ddd;
        padding: 15px;
        margin: 10px;
        width: 250px;
        font-family: Arial, sans-serif;
    }
    .post h2 {
        margin: 0;
        font-size: 1.5em;
    }
    .post .author {
        color: #555;
        font-size: 0.9em;
        margin-bottom: 10px;
    }
    .post p {
        margin: 10px 0;
        font-size: 0.9em;
        color: #333;
    }
    .post button {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
        font-size: 0.9em;
        border-radius: 4px;
    }
    .post button:hover {
        background-color: #555;
    }
</style>

<div>
    @foreach($posts as $post)
    <div class="post">
        <h2>{{ $post->title }}</h2>
        <div class="author">Author: {{ $post->author->name }}</div>
        <p>{{ $post->content }}</p>
        <a href="/authors/read/{{ $post->id }}"><button>Read more</button></a>
    </div>
    @endforeach
</div>
@endsection