@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    <a href="/authors/create" class="btn btn-primary my-3">Create Posts</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</span></td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->author->name }}</td>
                    <td>
                        <a href="/authors/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/authors/{{ $post->id }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
