<x-app-layout>

<div class="container mx-auto py-8">

    <h1 class="text-3xl font-bold text-green-700 mb-8">
        🛒 Marketplace AgriSmart
    </h1>

    <div class="grid md:grid-cols-3 gap-6">

        @forelse($products as $product)

            <div class="bg-white rounded-xl shadow-lg overflow-hidden">

                @if($product->image)
                    <img
                    src="{{ asset('uploads/products/'.$product->image) }}"
                        alt="{{ $product->name }}"
                        class="w-full h-56 object-cover">
                @else
                    <img
                        src="https://placehold.co/400x300?text=No+Image"
                        alt="Tidak ada gambar"
                        class="w-full h-56 object-cover">
                @endif

                <div class="p-5">

                    <p class="text-sm text-green-600">
                        {{ $product->category->name ?? '-' }}
                    </p>

                    <h2 class="text-xl font-bold mt-2">
                        {{ $product->name }}
                    </h2>

                    <p class="text-gray-500 mt-2">
                        {{ $product->description }}
                    </p>

                    <p class="text-2xl font-bold text-green-700 mt-4">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </p>

                    <p class="text-gray-500 mt-2">
                        Stok : {{ $product->stock }}
                    </p>

                    <form action="{{ route('cart.store', $product->id) }}" method="POST">
                        @csrf
                        <button
                            type="submit"
                            @if($product->stock <= 0) disabled @endif
                            class="mt-5 w-full {{ $product->stock <= 0 ? 'bg-gray-400 cursor-not-allowed' : 'bg-green-600 hover:bg-green-700' }} text-white py-3 rounded-lg">
                            🛒 {{ $product->stock <= 0 ? 'Stok Habis' : 'Tambah ke Keranjang' }}
                        </button>
                    </form>

                </div>

            </div>

        @empty

            <p>
                Belum ada produk.
            </p>

        @endforelse

    </div>

</div>

</x-app-layout>