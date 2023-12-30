@extends('layout/main')

@section('container')
    <article style="margin-left: 25vw; margin-right: 25vw;">
        <h2 style="font-size: 28px; margin-top: 20px; font-weight: bold;">{{ $post->title }}</h2>

        <p style="margin-top: 2px;">Oleh <a href="/authors/{{ $post->author->username }}" style="text-decoration: underline;">{{ $post->author->name }}</a> Dalam 
            <a href="/categories/{{ $post->category->slug }}" 
            style="color: blue; text-decoration: none; border-bottom: 2px solid transparent; padding-bottom: 3px;"
            onmouseover="this.style.borderBottom='2px solid blue'; this.style.paddingBottom='0px';"
            onmouseout="this.style.borderBottom='2px solid transparent'; this.style.paddingBottom='3px';"
            >
                {{ $post->category->name }}
            </a>
        </p>

        <img src="https://source.unsplash.com/300x300/?{{ $post->category->name }}" alt="Gambar Berita" class="w-full h-40 object-cover mb-4" style="margin-top: 20px; margin-bottom: 20px;">

        <div style="margin-top: 20px; margin-bottom: 20px;">
            {!! $post->body !!}
        </div>

        <a href="/" style="display: inline-block; margin-top: 10px; margin-bottom: 10%; padding: 8px 16px; background-color: #4a5568; color: white; border-radius: 4px; text-decoration: none; transition: background-color 0.3s;"
            onmouseover="this.style.backgroundColor='#2d3748';" onmouseout="this.style.backgroundColor='#4a5568';">
            Back To Post
        </a>
    </article>



    @include('partials.footer')
@endsection