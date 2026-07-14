<x-app-layout>

<div class="max-w-4xl mx-auto py-8 px-6">

    <div class="bg-white rounded-xl shadow-lg p-8">

        <h1 class="text-3xl font-bold text-green-700 mb-6">
            🌿 Tambah Pupuk
        </h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('fertilizers.store') }}" method="POST">

            @csrf

            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Nama Pupuk
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-green-500">
            </div>

            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Deskripsi
                </label>

                <textarea
                    name="description"
                    rows="4"
                    class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-green-500">{{ old('description') }}</textarea>
            </div>

            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Harga
                </label>

                <input
                    type="number"
                    name="price"
                    value="{{ old('price') }}"
                    class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-green-500">
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">
                    Stok
                </label>

                <input
                    type="number"
                    name="stock"
                    value="{{ old('stock') }}"
                    class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-green-500">
            </div>

            <div class="flex gap-3">

                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">
                    Simpan
                </button>

                <a href="{{ route('fertilizers.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

</x-app-layout>