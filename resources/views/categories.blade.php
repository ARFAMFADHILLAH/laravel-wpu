@extends('layouts/main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>
@foreach ($categories as $category)
<ul>
    <LI>

        <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
    </LI>
</ul>
    


@endforeach



@endsection

@foreach ($posts as $post)
<article>
    <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p>{{ $post->excerpt }}</p>

</article>
@endforeach


@endsection