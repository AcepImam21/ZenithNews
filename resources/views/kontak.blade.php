@include('layout.main')

<!-- component -->
<div class="my-8 mx-8">
    <div class="my-8 mx-4 shadow-2xl py-8 px-8">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg text-dark">
                <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-dark font-extrabold tracking-tight">
                    Kontak Kami</h1>
                <p class="text-normal text-lg sm:text-2xl font-medium text-dark dark:text-white mt-2">
                    Hubungi Kami</p>

                <div class="flex items-center mt-8 text-dark">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">Setiabudhi, Bandung</div>
                </div>

                <div class="flex items-center mt-4 text-dark">
                    <div class="text-black">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>                    
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">+880 1234567890</div>
                </div>

                <div class="flex items-center mt-4 text-dark">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <div class="ml-4 text-md tracking-wide font-semibold w-40">zenitnews@demo.com</div>
                </div>
            </div>
            <form class="p-6 flex flex-col justify-center">
                <div class="flex flex-col">
                    <label for="name" class="hidden">Nama Lengkap</label>
                    <input type="name" name="name" id="name" placeholder="Nama Lengkap"
                        class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                </div>

                <div class="flex flex-col mt-2">
                    <label for="email" class="hidden">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email"
                        class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                </div>

                <div class="flex flex-col mt-2">
                    <label for="tel" class="hidden">Number</label>
                    <input type="tel" name="tel" id="tel" placeholder="Nomor Telepon"
                        class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                </div>

                <div class="my-4 ">
                    <textarea placeholder="Pesan*"
                        class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 dark:bg-gray-800 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                </div>

                <button type="submit"
                    class="md:w-32 bg-blue-600 dark:bg-gray-200 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-300 transition ease-in-out duration-300">Kirim</button>
            </form>
        </div>
    </div>
</div>

@include('partials.footer')
