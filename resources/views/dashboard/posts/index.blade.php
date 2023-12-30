@extends('dashboard.layouts.main')
@section('container')
    <div class="h-full ml-14 mt-24 mb-10 md:ml-64">
        <h1 class="mx-4 mt-4 text-2xl">Postingan Saya</h1>
        <!-- Client Table -->
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
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Judul</th>
                                <th class="px-4 py-3">Kategori</th>
                                <th class="px-4 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($posts as $post)
                                <tr
                                    class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3 text-sm">{{ $post->title }}</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-2 font-semibold leading-tight text-green-900 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">{{ $post->category->name }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-white">
                                        <a href="" class="bg-red-600 rounded-md px-3 py-2"><ion-icon
                                                name="trash-outline"></ion-icon></a>
                                        <a href="/dashboard/posts/{{ $post->slug }}"
                                            class="bg-green-600 rounded-md px-3 py-2"><ion-icon
                                                name="eye-outline"></ion-icon></a>
                                        <a href="" class="bg-blue-600 rounded-md px-3 py-2"><ion-icon
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
