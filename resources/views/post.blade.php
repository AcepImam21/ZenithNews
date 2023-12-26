@extends('layout/main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>

        {!! $post->body !!}

    </article>

    <a href="/">Back To Post</a>

    @include('partials.footer')
@endsection