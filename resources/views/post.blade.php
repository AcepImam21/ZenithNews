@extends('layout/main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>

        <p>By. Imam in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}

    </article>

    <a href="/">Back To Post</a>

    @include('partials.footer')
@endsection