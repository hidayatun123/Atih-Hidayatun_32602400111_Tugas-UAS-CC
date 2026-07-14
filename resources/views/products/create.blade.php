<x-app-layout>

<div class="min-h-screen bg-green-50 py-10">

    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-xl p-8">


        <h1 class="text-3xl font-bold text-green-700 mb-6">
            🌱 Tambah Produk AgriSmart
        </h1>


<form action="{{ route('products.store') }}"
      method="POST"
      enctype="multipart/form-data">
            @csrf


            
            <!-- Jenis Produk -->
            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Jenis Produk
                </label>


                <select name="type"
                class="w-full border border-green-300 rounded-lg p-3">


                    <option value="benih">
                        🌱 Benih
                    </option>


                    <option value="pupuk">
                        🧪 Pupuk
                    </option>


                </select>


            </div>



            <!-- Nama Produk -->
            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Nama Produk
                </label>


                <input
                type="text"
                name="name"
                placeholder="Contoh: Benih Padi Ciherang"
                class="w-full border border-green-300 rounded-lg p-3">


            </div>




            <!-- Deskripsi -->
            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Deskripsi
                </label>


                <textarea
                name="description"
                rows="4"
                placeholder="Masukkan deskripsi produk"
                class="w-full border border-green-300 rounded-lg p-3"></textarea>


            </div>




            <!-- Harga -->
            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Harga
                </label>


                <input
                type="number"
                name="price"
                placeholder="Contoh: 35000"
                class="w-full border border-green-300 rounded-lg p-3">


            </div>




            <!-- Stok -->
            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Stok
                </label>


                <input
                type="number"
                name="stock"
                placeholder="Jumlah stok"
                class="w-full border border-green-300 rounded-lg p-3">


            </div>
<div class="mb-5">
    <label class="block font-semibold mb-2">
        Gambar Produk
    </label>

    <input
        type="file"
        name="image"
        class="w-full border border-green-300 rounded-lg p-3">
</div>









            <!-- Tombol -->
            <div class="flex gap-3">


                <button
                type="submit"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-semibold">


                    💾 Simpan Produk


                </button>



                <a href="{{ route('products.index') }}"
                class="bg-gray-400 hover:bg-gray-500 text-white px-6 py-3 rounded-lg">


                    Kembali


                </a>


            </div>



        </form>


    </div>


</div>


</x-app-layout>