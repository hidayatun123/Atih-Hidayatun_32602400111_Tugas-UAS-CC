<x-app-layout>

<div class="max-w-4xl mx-auto py-8 px-6">

    <div class="bg-white rounded-xl shadow-lg p-8">

        <h1 class="text-3xl font-bold text-yellow-600 mb-6">
            ✏️ Edit Pupuk
        </h1>

        <form action="{{ route('fertilizers.update', $fertilizer->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-5">
                <label class="block mb-2 font-semibold">Nama Pupuk</label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $fertilizer->name) }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <div class="mb-5">
                <label class="block mb-2 font-semibold">Deskripsi</label>

                <textarea
                    name="description"
                    rows="4"
                    class="w-full border rounded-lg p-3">{{ old('description', $fertilizer->description) }}</textarea>
            </div>

            <div class="mb-5">
                <label class="block mb-2 font-semibold">Harga</label>

                <input
                    type="number"
                    name="price"
                    value="{{ old('price', $fertilizer->price) }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <div class="mb-5">
                <label class="block mb-2 font-semibold">Stok</label>

                <input
                    type="number"
                    name="stock"
                    value="{{ old('stock', $fertilizer->stock) }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <button
                class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg">
                Update
            </button>

            <a href="{{ route('fertilizers.index') }}"
               class="bg-gray-500 text-white px-6 py-3 rounded-lg">
                Kembali
            </a>

        </form>

    </div>

</div>

</x-app-layout>