@extends('layout/main')

@section('container')

<h2 class="text-3xl font-bold underline my-6 text-center">Semua Kategori</h2>

<div class="flex flex-wrap justify-center">
    @foreach ($categories as $category)
        <div class="max-w-sm rounded overflow-hidden shadow-lg mx-2 my-20 transition-transform transform-gpu hover:scale-105 hover:shadow-md">
            <img class="w-full transition-transform transform-gpu hover:scale-120" src="https://source.unsplash.com/300x300/?{{ $category->name }}" alt="{{ $category->name }}">
            <div class="px-6 py-4">
                <a href="/categories/{{ $category->slug }}">
                    <div class="font-bold text-xl mb-2">{{ $category->name }}</div>
                </a>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">ZenithNews</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">2024</span>
            </div>
        </div>
    @endforeach
</div>

@include('partials.footer')
@endsection
