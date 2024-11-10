@extends('layouts.app')

@section('content')
<h2>{{ $post->title }}</h2>
<div class="author">Author: {{ $post->author->name }}</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut mattis dui, non pulvinar felis nec erat.</p>
@endsection