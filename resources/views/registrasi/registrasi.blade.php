<!-- component -->
@extends('layout.main')

@section('container')
    <div class="relative py-16 bg-gradient-to-br from-sky-50 to-gray-200">
        <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40 text-center ">
            <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12 ">
                <div class="rounded-xl bg-white shadow-xl ">
                    <div class="p-6 sm:p-16 ">
                        <div class="mb-3 flex justify-center items-center">
                            <img src="image/Group 2.png" loading="lazy" class="h-14" alt="tailus logo">
                        </div>
                        <div class="space-y-4">
                            <h2 class="mb-8 text-2xl text-cyan-900 font-bold">Selamat Datang!<br>Silahkan registrasi dahulu
                            </h2>
                        </div>

                        <form action="/register" method="post">
                            @csrf
                            <div class="mt-10 grid space-y-4">
                                <input
                                    class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100"
                                    placeholder="Nama Lengkap" type="text" name="name" id="name" required
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <input
                                    class="group
                                    h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300
                                    hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100"
                                    placeholder="Username" type="text" name="username" id="username" required
                                    value="{{ old('username') }}">
                                @error('username')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <input
                                    class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100"
                                    placeholder="Email" type="email" id="email" name="email" required
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <input
                                    class=" @error('password') is-invalid @enderror group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100"
                                    placeholder="Password" type="password" name="password" id="password" required>
                                @error('password')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <button class="w-100 h-12 mx-16 bg-gray-900 hover:bg-gray-700 text-white font-bold rounded"
                                    type="submit">Daftar</button>
                        </form>
                        <small class="text-center">Sudah mendaftar? <a href="/login" class="text-blue-300">Login
                            </a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
