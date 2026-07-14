<x-app-layout>

<div class="relative z-50 max-w-7xl mx-auto py-8 px-6">

    <!-- Header -->
    <div class="bg-green-700 rounded-2xl shadow-lg p-8 text-white">

        <h1 class="text-4xl font-bold">
            🌾 Dashboard Buyer
        </h1>

        <p class="mt-2 text-lg">
            Selamat datang,
            <span class="font-bold">{{ Auth::user()->name }}</span> 👋
        </p>

    </div>

    <!-- Menu -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

        <a href="{{ route('marketplace') }}"
   class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">

            <div class="text-5xl">🛒</div>

            <h2 class="text-xl font-bold mt-4">
                Marketplace
            </h2>

            <p class="text-gray-600 mt-2">
                Lihat produk pertanian
            </p>

        </a>

        <a href="{{ route('consultations.index') }}"
           class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">

            <div class="text-5xl">💬</div>

            <h2 class="text-xl font-bold mt-4">
                Konsultasi
            </h2>

            <p class="text-gray-600 mt-2">
                Konsultasi dengan admin
            </p>

        </a>

        <a href="{{ route('orders.index') }}"
   class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">

    <div class="text-5xl">📦</div>

    <h2 class="text-xl font-bold mt-4">
        Pesanan Saya
    </h2>

    <p class="text-gray-600 mt-2">
        Lihat riwayat pesanan
    </p>

</a>

        </a>
        <a href="{{ route('profile.index') }}"
   class="block bg-indigo-500 text-white p-6 rounded-2xl shadow-lg hover:scale-105 transition">

    <h2 class="text-xl font-bold">👤 Akun Saya</h2>

    <p class="mt-3 text-indigo-100">
        Lihat informasi akun Anda.
    </p>

</a>

    </div>

</div>

</x-app-layout>