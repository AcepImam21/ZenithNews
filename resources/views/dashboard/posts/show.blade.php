@extends('dashboard.layouts.main')
@section('container')
    <div class="h-full ml-14 mt-14 md:ml-64">
        <article style="margin-left: 25vw; margin-right: 25vw;">
            <h2 style="font-size: 28px; margin-top: 20px; font-weight: bold;">{{ $post->title }}</h2>
            <a href="/dashboard/posts"
                class="bg-gray-700 inline-block mt-10 mb-10  hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 transform hover:shadow-md"><ion-icon
                    name="arrow-back-outline"></ion-icon>Kembali
                Ke Post </a>
            <a href="#"
                class="bg-red-700 inline-block mt-10 mb-10  hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 transform hover:shadow-md"><ion-icon
                    name="trash-outline"></ion-icon>Hapus
            </a>
            <a href="#"
                class="bg-blue-700 inline-block mt-10 mb-10  hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 transform hover:shadow-md"><ion-icon
                    name="create-outline"></ion-icon>Edit
            </a>

            <img src="https://source.unsplash.com/300x300/?{{ $post->category->name }}" alt="Gambar Berita"
                class="w-full h-40 object-cover mb-4" style=" margin-bottom: 20px;">

            <div style="margin-top: 20px; margin-bottom: 20px;">
                {!! $post->body !!}
            </div>

        </article>
    </div>
@endsection
