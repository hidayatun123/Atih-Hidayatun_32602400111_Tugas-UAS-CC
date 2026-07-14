<x-app-layout>

<div class="min-h-screen bg-green-50 py-10">

    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-xl p-8">

        <h1 class="text-3xl font-bold text-green-700 mb-6">
            ✏️ Edit Produk
        </h1>

        <form action="{{ route('products.update', $product->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

           
            <!-- Jenis -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Jenis Produk
                </label>

                <select name="type"
                        class="w-full border border-green-300 rounded-lg p-3">

                    <option value="benih"
                        {{ $product->type == 'benih' ? 'selected' : '' }}>
                        🌱 Benih
                    </option>

                    <option value="pupuk"
                        {{ $product->type == 'pupuk' ? 'selected' : '' }}>
                        🧪 Pupuk
                    </option>

                </select>
            </div>

            <!-- Nama -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Nama Produk
                </label>

                <input type="text"
                       name="name"
                       value="{{ $product->name }}"
                       class="w-full border border-green-300 rounded-lg p-3">
            </div>

            <!-- Deskripsi -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Deskripsi
                </label>

                <textarea name="description"
                          rows="4"
                          class="w-full border border-green-300 rounded-lg p-3">{{ $product->description }}</textarea>
            </div>

            <!-- Harga -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Harga
                </label>

                <input type="number"
                       name="price"
                       value="{{ $product->price }}"
                       class="w-full border border-green-300 rounded-lg p-3">
            </div>

            <!-- Stok -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Stok
                </label>

                <input type="number"
                       name="stock"
                       value="{{ $product->stock }}"
                       class="w-full border border-green-300 rounded-lg p-3">
            </div>

            <!-- Gambar Lama -->
            @if($product->image)
                <div class="mb-5">
                    <label class="block font-semibold mb-2">
                        Gambar Saat Ini
                    </label>

                    <img src="{{ asset('uploads/products/'.$product->image) }}"
                         class="w-32 rounded">
                </div>
            @endif

            <!-- Ganti Gambar -->
            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Ganti Gambar
                </label>

                <input type="file"
                       name="image"
                       class="w-full border border-green-300 rounded-lg p-3">
            </div>

            <!-- Tombol -->
            <div class="flex gap-3">

                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">

                    💾 Update Produk

                </button>

                <a href="{{ route('products.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

</x-app-layout>