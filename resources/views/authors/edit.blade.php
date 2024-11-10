@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>
    
    @include('templates.errors')

    <form action="/authors/{{ $post->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" name="content" id="content" class="form-control">{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="author_name" class="form-label">Author</label>
            <input type="text" id="author_name" readonly class="form-control" value="{{ $post->author->name }}">
        </div>
        <input type="hidden" name="author_id" readonly value="{{ $post->author->id }}">
        <button type="submit" class="btn btn-primary">Save</button>
    </form>


@endsection
