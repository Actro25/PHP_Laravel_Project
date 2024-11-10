@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>
    
    @include('templates.errors')

    <form action="/authors" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" name="content" id="content" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="author_name" class="form-label">Author</label>
            <input type="text" id="author_name" readonly class="form-control" value="{{Auth::user()->name}}">
        </div>
        <input type="hidden" name="author_id" readonly value="{{ Auth::user()->id }}">
        <button type="submit" class="btn btn-primary">Create</button>
    </form>


@endsection
