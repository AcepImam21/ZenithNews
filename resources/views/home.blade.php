@extends('layout.main')

@section('container')
    {{-- Hero Section --}}
    {{-- <div class="bg-cover bg-center h-64 md:h-96 flex items-center justify-center"
        style="background-image: url('https://via.placeholder.com/1600x800');">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Selamat Datang di Website Berita</h1>
            <p class="text-lg md:text-xl mb-8">Temukan berita terkini dan informasi menarik di seluruh dunia.</p>
            <a href="/Kkategori" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600">Baca Sekarang</a>
        </div>
    </div> --}}

    {{-- Carousel --}}
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white z-40">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Selamat Datang di ZenithNews</h1>
            <p class="text-lg md:text-xl mb-8">Temukan berita terkini dan informasi menarik di seluruh dunia.</p>
            <a href="/kategori" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600">Baca Sekarang</a>
        </div>
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/1600x900/?technology"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/1600x900/?health"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/1600x900/?sports"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/1600x900/?culinary"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/1600x900/?motorsport"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
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
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar Berita"
                                class="w-full h-40 object-cover mb-4" style=" margin-bottom: 20px;">
                            @else
                                <img src="https://source.unsplash.com/300x300/?{{ $post->category->name }}"
                                alt="Gambar Berita" class="w-full h-40 object-cover mb-4">
                            @endif
                            
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
                            class="inline-block mt-10 px-6 py-2 bg-gray-800 text-white rounded transition duration-300 hover:bg-gray-700 w-2/5  ">
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
