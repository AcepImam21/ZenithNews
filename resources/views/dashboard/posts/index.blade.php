@extends('dashboard.layouts.main')
@section('container')
    <div class="h-full ml-14 mt-24 mb-10 md:ml-64">
        <h1 class="mx-4 mt-4 text-2xl">Postingan Saya</h1>
        <!-- Client Table -->

        @if (session()->has('success'))
            <div class="px-6 py-4 bg-green-50 rounded-lg text-green-500 w-1/3 mx-3 mt-2">
                <span class="font-bold">{{ session('success') }}</span>
            </div>
        @endif

        <div class="mt-4 mx-4">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">

                    <a href="/dashboard/posts/create"
                        class="bg-blue-700 inline-block mb-5 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 transform hover:shadow-md">Tambah
                        Postingan
                    </a>

                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left uppercase border-b border-gray-700  text-gray-400 bg-gray-800">
                                <th class="px-4 py-3">Judul</th>
                                <th class="px-4 py-3">Kategori</th>
                                <th class="px-4 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class=" divide-y divide-gray-700 bg-gray-800">
                            @foreach ($posts as $post)
                                <tr class="bg-gray-800  hover:bg-gray-900  text-gray-400">
                                    <td class="px-4 py-3 text-sm">{{ $post->title }}</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-2 font-semibold leading-tight text-green-900 bg-green-200 rounded-full  ">{{ $post->category->name }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-white">
                                        <form action="/dashboard/posts/{{ $post->slug }}" class="inline" method="post">
                                            @method('delete')
                                            @csrf

                                            <button class="bg-red-600 rounded-md px-3 py-2 "
                                                onclick="return confirm('Anda yakin ingin menghapus data ini?')"><ion-icon
                                                    name="trash-outline"></ion-icon></button>
                                        </form>


                                        <a href="/dashboard/posts/{{ $post->slug }}"
                                            class="bg-green-600 rounded-md px-3 py-2"><ion-icon
                                                name="eye-outline"></ion-icon></a>
                                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="bg-blue-600 rounded-md px-3 py-2"><ion-icon
                                                name="create-outline"></ion-icon></a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- ./Client Table -->
    </div>
@endsection
