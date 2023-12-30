@extends('layout.main')

@section('container')
    {{-- Hero Section --}}
    <div class="bg-cover bg-center h-64 md:h-96 flex items-center justify-center"
        style="background-image: url('https://via.placeholder.com/1600x800');">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Selamat Datang di Website Berita</h1>
            <p class="text-lg md:text-xl mb-8">Temukan berita terkini dan informasi menarik di seluruh dunia.</p>
            <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600">Selengkapnya</a>
        </div>
    </div>


    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>

        <!-- Card Container -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Card 1 -->
            @foreach ($posts as $post)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/300" alt="Gambar Berita" class="w-full h-40 object-cover mb-4">
                    <h2 class="text-lg font-bold mb-1">{{ $post->title }}</h2>

                    <p style="margin-top: 2px; margin-bottom: 10px">Oleh <a href="/authors/{{ $post->author->username }}" style="text-decoration: underline;">{{ $post->author->name }}</a> Dalam 
                        <a href="/categories/{{ $post->category->slug }}" 
                        style="color: blue; text-decoration: none; border-bottom: 2px solid transparent; padding-bottom: 3px;"
                        onmouseover="this.style.borderBottom='2px solid blue'; this.style.paddingBottom='0px';"
                        onmouseout="this.style.borderBottom='2px solid transparent'; this.style.paddingBottom='3px';"
                        >
                            {{ $post->category->name }}
                        </a>
                    </p>
                    <p class="text-gray-600">{{ $post->excerpt }}
                    </p>
                    <a href="/post/{{ $post->slug }}" class="text-blue-500 mt-2 inline-block">Baca Selengkapnya</a>
                </div>
            @endforeach
        </div>
    </div>

    @include('partials.footer')
@endsection
