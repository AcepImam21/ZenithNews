@include('layout.main')

<div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40 ">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Hubungi Kami</h1>

        <form>
            <div class="mb-4">
                <label for="nama" class="block text-gray-600">Nama:</label>
                <input type="text" id="nama" name="nama" class="w-full border rounded py-2 px-3">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email:</label>
                <input type="email" id="email" name="email" class="w-full border rounded py-2 px-3">
            </div>

            <div class="mb-4">
                <label for="pesan" class="block text-gray-600">Pesan:</label>
                <textarea id="pesan" name="pesan" rows="4" class="w-full border rounded py-2 px-3"></textarea>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Kirim Pesan
            </button>
        </form>
    </div>
</div>

@include('partials.footer')
