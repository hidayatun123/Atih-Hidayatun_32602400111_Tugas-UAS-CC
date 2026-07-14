<x-app-layout>
<div class="container mx-auto py-8">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-green-700">
            🌱 Daftar Produk
        </h1>

        <a href="{{ route('products.create') }}"
           class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-lg">
            + Tambah Produk
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-5">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full">

            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="p-3">Gambar</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Jenis</th>
                    <th class="p-3">Deskripsi</th>
                    <th class="p-3">Harga</th>
                    <th class="p-3">Stok</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($products as $product)
                    <tr class="border-b">

                        <td class="p-3">
                            @if($product->image)
                                <img
                                    src="{{ asset('uploads/products/'.$product->image) }}"
                                    class="w-20 h-20 object-cover rounded"
                                    alt="{{ $product->name }}">
                            @else
                                -
                            @endif
                        </td>

                        <td class="p-3">
                            {{ $product->name }}
                        </td>

                        <td class="p-3">
                            {{ ucfirst($product->type) }}
                        </td>

                        <td class="p-3">
                            {{ $product->description ? Str::limit($product->description, 40) : '-' }}
                        </td>

                        <td class="p-3">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </td>

                        <td class="p-3">
                            {{ $product->stock }}
                        </td>
<td class="p-3 whitespace-nowrap">

    <a href="{{ route('products.edit', $product->id) }}"
       style="background:#2563eb;color:white;padding:6px 10px;border-radius:6px;display:inline-block;font-size:14px;">
        ✏️ Edit
    </a>

    <form action="{{ route('products.destroy', $product->id) }}"
          method="POST"
          style="display:inline-block;">

        @csrf
        @method('DELETE')

        <button
            type="submit"
            onclick="return confirm('Hapus produk ini?')"
            style="background:#dc2626;color:white;padding:6px 10px;border-radius:6px;border:none;cursor:pointer;font-size:14px;">
            🗑️ Hapus
        </button>

    </form>

</td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="p-5 text-center text-gray-500">
                            Belum ada produk.
                        </td>
                    </tr>
                @endforelse

            </tbody>

        </table>
    </div>

</div>
</x-app-layout>