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
        <h1 class="text-2xl font-bold mb-4">Berita Terbaru </h1>

        <!-- Card Container -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Card 1 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/300" alt="Gambar Berita" class="w-full h-40 object-cover mb-4">
                    <h2 class="text-lg font-bold mb-2"></h2>
                    <p class="text-gray-600">Deskripsi singkat berita. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Baca Selengkapnya</a>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/300" alt="Gambar Berita" class="w-full h-40 object-cover mb-4">
                    <h2 class="text-lg font-bold mb-2">Judul Berita 2</h2>
                    <p class="text-gray-600">Deskripsi singkat berita. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Baca Selengkapnya</a>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/300" alt="Gambar Berita" class="w-full h-40 object-cover mb-4">
                    <h2 class="text-lg font-bold mb-2">Judul Berita 3</h2>
                    <p class="text-gray-600">Deskripsi singkat berita. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Baca Selengkapnya</a>
                </div>
            </div>
    </div>

    @include('partials.footer')
@endsection