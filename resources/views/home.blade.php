@extends('layout.main')

@section('container')
    {{-- Hero Section --}}
    <div class="bg-cover bg-center h-64 md:h-96 flex items-center justify-center"
        style="background-image: url('https://via.placeholder.com/1600x800');">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Selamat Datang di Website Berita</h1>
            <p class="text-lg md:text-xl mb-8">Temukan berita terkini dan informasi menarik di seluruh dunia.</p>
            <a href="/Kkategori" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600">Baca Sekarang</a>
        </div>
    </div>


    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>

        {{-- <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <button class="btn btn-danger" type="submit">Search</button>
                      </div>
                </form>
            </div>
        </div> --}}

        <div class="flex justify-center my-3">
            <div class="w-6/12">
                <form action="/">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="flex items-center border-b-2 border-black py-2">
                        <input type="text"
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            placeholder="Search.." name="search" value="{{ request('search') }}" />
                        <button
                            class="flex-shrink-0 bg-gray-800 hover:bg-gray-600 active:translate-y-1 border-black hover:border-black text-sm border-4 text-white py-1 px-2 rounded transition-transform duration-150 ease-in-out"
                            type="submit">
                            Search
                        </button>

                    </div>
                </form>
            </div>
        </div>




        @if ($posts->count())
            <!-- Card Container -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Card 1 -->
                @foreach ($posts as $post)
                    <div
                        class="bg-white p-4 rounded-lg shadow-md flex flex-col justify-between transition duration-300 transform hover:scale-105 hover:shadow-lg">
                        <div>
                            <img src="https://source.unsplash.com/300x300/?{{ $post->category->name }}" alt="Gambar Berita"
                                class="w-full h-40 object-cover mb-4">
                            <h2 class="text-lg font-bold mb-1">{{ $post->title }}</h2>
                            <p style="margin-top: 2px; margin-bottom: 10px">Oleh
                                <a href="/authors/{{ $post->author->username }}" class="hover:underline" style="">
                                    {{ $post->author->name }}
                                </a>
                                Dalam
                                <a href="/categories/{{ $post->category->slug }}"
                                    class="hover:text-blue-500 transition duration-300">
                                    {{ $post->category->name }}
                                </a>
                            </p>
                            <p class="text-gray-600">{{ $post->excerpt }}</p>
                        </div>
                        <a href="/post/{{ $post->slug }}"
                            class="inline-block mt-10 px-4 py-2 bg-gray-800 text-white rounded transition duration-300 hover:bg-gray-700"
                            style="width: 37%">
                            Selengkapnya
                        </a>
                    </div>
                @endforeach
            </div>
    </div>

    </div>

    </div>
@else
    <p class="text-center fs-4">No Post Found</p>
    @endif

    @include('partials.footer')
@endsection
