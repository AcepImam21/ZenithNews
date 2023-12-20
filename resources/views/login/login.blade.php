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
                            <h2 class="mb-8 text-2xl text-cyan-900 font-bold">Selamat Datang!<br>Login untuk melanjutkan
                            </h2>
                        </div>
                        <div class="mt-10 grid space-y-4">
                            <input
                                class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100"
                                placeholder="Email">
                            <input
                                class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100"
                                placeholder="Password">

                            <h1 class="text-center">Atau</h1>

                            <button
                                class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300
                        hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-center">
                                    <img src="https://tailus.io/sources/blocks/social/preview/images/google.svg"
                                        class="absolute left-0 w-5" alt="google logo">
                                    <span
                                        class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Continue
                                        with Google</span>
                                </div>
                            </button>

                            <button class="w-100 h-12 mx-12 bg-gray-900 hover:bg-gray-700 text-white font-bold rounded"
                                type="submit">Masuk</button>
                            <small class="text-center">Belum terdaftar? <a href="/register" class="text-blue-300"> Daftar
                                    Segera!</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
