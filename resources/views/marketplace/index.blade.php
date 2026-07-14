<x-app-layout>

<div class="min-h-screen bg-gray-100">

  

    <!-- Search -->
    <div class="max-w-screen-2xl mx-auto px-6 mt-6">

        <form method="GET" action="{{ route('marketplace') }}">

        <div class="flex items-center gap-3">

    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Cari produk..."
        class="w-full border rounded-lg p-3">

    <button
        type="submit"
        class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700">

        Cari

    </button>

</div>
        </form>

    </div>


    <!-- Produk -->
    <div class="max-w-screen-2xl mx-auto px-6 py-8">

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8 gap-4">

            @forelse($products as $product)
                        <div class="bg-white rounded-lg shadow hover:shadow-xl transition duration-300 overflow-hidden">

                <!-- Gambar -->
                <div class="h-32 bg-gray-100">

                    @if($product->image)

                        <img
                            src="{{ asset('uploads/products/'.$product->image) }}"
                            alt="{{ $product->name }}"
                            class="w-full h-full object-cover">

                    @else

                        <div class="flex items-center justify-center h-full text-gray-400 text-4xl">
                            🌱
                        </div>

                    @endif

                </div>

                <!-- Isi -->
                <div class="p-3">

                    <span class="text-[11px] text-green-600 font-semibold">
                        {{ $product->category->name ?? '-' }}
                    </span>

                    <h2 class="font-semibold text-sm mt-1 h-10 overflow-hidden">
                        {{ $product->name }}
                    </h2>

                    <p class="text-green-700 font-bold text-lg mt-2">
                        Rp {{ number_format($product->price,0,',','.') }}
                    </p>

                    <p class="text-xs text-gray-500">
                        Stok : {{ $product->stock }}
                    </p>

                   <form action="{{ route('cart.store') }}" method="POST">

    @csrf

    <input type="hidden"
           name="product_id"
           value="{{ $product->id }}">

    <button
        type="submit"
        class="mt-3 w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg text-sm">

        🛒 Tambah

    </button>

</form>

                </div>

            </div>

            @empty

            <div class="col-span-8 text-center py-20">

                <div class="text-6xl">
                    🌱
                </div>

                <h2 class="text-2xl font-bold text-gray-600 mt-4">
                    Belum Ada Produk
                </h2>

                <p class="text-gray-500 mt-2">
                    Admin belum menambahkan produk.
                </p>

            </div>

            @endforelse

        </div>

    </div>

</div>

</x-app-layout>