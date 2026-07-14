<x-app-layout>

<div class="max-w-7xl mx-auto py-8 px-6">

    <!-- Header -->
    <div class="bg-gradient-to-r from-slate-800 via-green-900 to-green-800 rounded-2xl shadow-xl p-8 text-white mb-8">

        <h1 class="text-4xl font-bold">
            🌾 Dashboard Administrator
        </h1>

        <p class="mt-2 text-lg text-gray-200">
            Selamat datang kembali,
            <span class="font-bold text-white">{{ Auth::user()->name }}</span> 👋
        </p>

    </div>

   

        <div class="bg-slate-100 rounded-xl shadow-lg p-6 flex justify-between items-center">
            <div>
                <p class="text-slate-600 font-medium">
                    🌾 Total Produk
                </p>

                <h2 class="text-4xl font-bold text-green-800 mt-2">
                    {{ \App\Models\Product::count() }}
                </h2>
            </div>
        </div>

        <div class="bg-slate-100 rounded-xl shadow-lg p-6 flex justify-between items-center">
            <div>
                <p class="text-slate-600 font-medium">
                    🌿 Total Pupuk
                </p>

                <h2 class="text-4xl font-bold text-lime-700 mt-2">
                    {{ \App\Models\Fertilizer::count() }}
                </h2>
            </div>
        </div>

        <div class="bg-slate-100 rounded-xl shadow-lg p-6 flex justify-between items-center">
            <div>
                <p class="text-slate-600 font-medium">
                    💬 Total Konsultasi
                </p>

                <h2 class="text-4xl font-bold text-amber-700 mt-2">
                    {{ \App\Models\Consultation::count() }}
                </h2>
            </div>
        </div>

    </div>

    <!-- Menu -->
    <div class="mt-10">

        <h2 class="text-2xl font-bold text-slate-800 mb-5">
            📋 Menu Administrator
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">

      
            <!-- Produk -->
            <a href="{{ route('products.index') }}"
   class="block bg-yellow-400 text-gray-800 p-6 rounded-2xl shadow-lg hover:scale-105 transition">

    <h2 class="text-xl font-bold">🛒 Produk</h2>

    <p class="mt-3">
        Tambah dan kelola produk petani.
    </p>

</a>
            <!-- Pupuk -->
          <a href="{{ route('admin.orders.index') }}"
   class="block bg-emerald-500 text-white p-6 rounded-2xl shadow-lg hover:scale-105 transition">

    <h2 class="text-xl font-bold">📦 Pesanan</h2>

    <p class="mt-3 text-emerald-100">
        Pantau transaksi pelanggan.
    </p>

</a>

            <!-- Konsultasi -->
            <a href="{{ route('consultations.index') }}"
                class="bg-amber-700 hover:bg-amber-800 text-white rounded-xl p-6 shadow-lg transition duration-300 hover:scale-105">

                <div class="text-5xl">💬</div>

                <h3 class="text-xl font-bold mt-4">
                    Konsultasi
                </h3>

            </a>

            <!-- Pesanan -->
            <a href="#"
                class="bg-stone-700 hover:bg-stone-800 text-white rounded-xl p-6 shadow-lg transition duration-300 hover:scale-105">

                <div class="text-5xl">🛒</div>

                <h3 class="text-xl font-bold mt-4">
                    Pesanan
                </h3>

            </a>

            <!-- Pengguna -->
            <a href="#"
                class="bg-teal-700 hover:bg-teal-800 text-white rounded-xl p-6 shadow-lg transition duration-300 hover:scale-105">

                <div class="text-5xl">👥</div>

                <h3 class="text-xl font-bold mt-4">
                    Pengguna
                </h3>

            </a>

        </div>

    </div>

</div>

</x-app-layout>