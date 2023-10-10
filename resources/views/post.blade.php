@extends('layouts.main')

@section('container')
    !--<h1 class="mb-5">{{ $posts->title }}</h1>--!
    <p>By. Arfa Muhammad Fadhillah in <a href="/categories/{{ $posts->category->slug }}"> {{ $posts->category->name }} </a> </p>
    
    {!! $posts->body !!} 

    <a href="/blog">Back to Posts</a>
@endsection
