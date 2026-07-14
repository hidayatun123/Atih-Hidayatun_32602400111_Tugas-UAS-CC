<x-app-layout>

<div class="grid md:grid-cols-3 gap-6">

   
    {{-- Produk --}}
    <a href="{{ route('products.index') }}"
       class="block bg-yellow-400 text-gray-800 p-6 rounded-2xl shadow-lg hover:scale-105 transition">

        <h2 class="text-xl font-bold">🛒 Produk</h2>

        <p class="mt-3">
            Tambah dan kelola produk petani.
        </p>

    </a>

   <a href="{{ route('admin.orders.index') }}"
   class="block bg-emerald-500 text-white p-6 rounded-2xl shadow-lg hover:scale-105 transition">

    <h2 class="text-xl font-bold">📦 Pesanan</h2>

    <p class="mt-3 text-emerald-100">
        Pantau transaksi pelanggan.
    </p>

</a>

{{-- Konsultasi --}}
<a href="{{ route('consultations.index') }}"
   class="block bg-blue-600 text-white p-6 rounded-2xl shadow-lg hover:scale-105 transition">

    <h2 class="text-xl font-bold">💬 Konsultasi</h2>

    <p class="mt-3 text-blue-100">
        Lihat dan jawab konsultasi dari buyer.
    </p>

</a>
    
<a href="{{ route('profile.index') }}"
   class="block bg-indigo-500 text-white p-6 rounded-2xl shadow-lg hover:scale-105 transition">

    <h2 class="text-xl font-bold">👤 Akun Saya</h2>

    <p class="mt-3 text-indigo-100">
        Lihat dan ubah profil akun.
    </p>

</a>

</div>

</x-app-layout>