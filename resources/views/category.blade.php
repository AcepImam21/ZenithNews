{{-- @extends('layout/main')

@section('container')
    <h2>Kategori Postingan : {{ $category }}</h2>

    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

    <a href="/">Back To Post</a>

    @include('partials.footer')
@endsection --}}

@extends('layout/main')

@section('container')
    <h2 class="text-3xl font-bold underline my-6 text-center">Kategori Postingan : {{ $category }}</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
        @foreach ($posts as $post)
            <article class="mb-4 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="/post/{{ $post->slug }}" class="underline text-blue-500 hover:text-blue-700">{{ $post->title }}</a>
                </h2>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>

    <div class="text-center">
        <a href="/" class="inline-block mt-10 mb-10 px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600 transition duration-300">
            Back To Post
        </a>
    </div>
    

    @include('partials.footer')
@endsection



