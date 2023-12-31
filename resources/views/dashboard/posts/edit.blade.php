@extends('dashboard.layouts.main')
@section('container')
    <div class="h-full ml-14 mt-20 md:ml-64">
        <h1 class="mx-4 mt-4 text-2xl">Edit Postingan</h1>

        <div class="max-w-4xl bg-white p-8 rounded">

            <form method="post" action="/dashboard/posts/{{ $post->slug }}">
                @method('put')
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-600">Judul</label>
                    <input type="text" id="title" name="title" class="mt-1 p-2 w-full border rounded @error('title') is-invalid @enderror" required autofocus value="{{ old('title', $post->title) }}">
                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="slug" class="block text-sm font-medium text-gray-600">Slug</label>
                    <input type="text" id="slug" name="slug" class="mt-1 p-2 w-full border rounded @error('slug') is-invalid @enderror" required value="{{ old('slug', $post->slug) }}">
                    @error('slug')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-gray-600">Kategori</label>
                    <select name="category_id" class="mt-1 p-2 w-full border rounded">
                        @foreach ($categories as $category) 
                            @if (old('category_id', $post->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="body" class="block text-sm font-medium text-gray-600">Body</label>
                    @error('body')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                    <trix-editor input="body"></trix-editor>
                </div>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Perbarui Postingan</button>
            </form>
        </div>

    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
