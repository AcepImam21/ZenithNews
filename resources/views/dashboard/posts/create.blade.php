@extends('dashboard.layouts.main')
@section('container')
    <div class="h-full ml-14 mt-20 md:ml-64">
        <h1 class="mx-4 mt-4 text-2xl">Tambah Postingan Saya</h1>

        <div class="max-w-md bg-white p-8  rounded ">

            <form method="post" action="/dashboard/posts">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-600">Judul</label>
                    <input type="text" id="title" name="title" class="mt-1 p-2 w-full border rounded">
                </div>

                <div class="mb-4">
                    <label for="slug" class="block text-sm font-medium text-gray-600">Slug</label>
                    <input type="slug" id="slug" name="slug" class="mt-1 p-2 w-full border rounded">
                </div>

                <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Buat Postingan</button>
            </form>
        </div>

    </div>
@endsection
