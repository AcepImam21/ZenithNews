<nav class="bg-white text-md p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="text-gray-800">
            <a href="/"><img src="image/Group 2.png" width="180" alt=""></a>
        </div>

        <!-- Search and Login -->
        <div class="flex items-center space-x-4">

            <input type="text" name="search" placeholder="Cari berita..." value="{{ request('search') }}"
                class="bg-gray-200 px-8 py-2 rounded-md focus:outline-gray-200">
            <button class="bg-blue-500 items-center text-white px-4 py-2 rounded-md"><ion-icon class=""
                    name="search"></ion-icon></button>
            @auth
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                    class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full focus:outline-none hover:text-blue-600 "
                    type="button">
                    <span class="sr-only">Open user menu</span>
                    Hi, {{ auth()->user()->name }}

                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="/dashboard" class="block px-4 py-2 dark:hover:text-white">Dashboard</a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit"
                                class=" focus:outline-none block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 dark:hover:text-white">Keluar</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="/login" class=" bg-gray-700 text-white px-4 py-2 rounded-md justify-between">Masuk</a>
            @endauth
        </div>
    </div>
</nav>

<!-- Bottom Navbar -->
<nav class="bg-gray-800 p-4">
    <div class="container m-auto flex justify-center items-center">
        <!-- Menu -->
        <div class="hidden md:flex space-x-8">
            <a href="/" class=" text-gray-300 text-lg ">Beranda</a>
            <a href="/teknologi" class="text-gray-300 text-lg">Teknologi</a>
            <a href="/olahraga" class="text-gray-300 text-lg">Olahraga</a>
            <a href="/kuliner" class="text-gray-300 text-lg">Kuliner</a>
            <a href="/kesehatan" class="text-gray-300 text-lg">Kesehatan</a>
            <a href="/otomotif" class="text-gray-300 text-lg">Otomotif</a>
            <a href="/kontak" class="text-gray-300 text-lg">Kontak</a>
        </div>
    </div>
</nav>

