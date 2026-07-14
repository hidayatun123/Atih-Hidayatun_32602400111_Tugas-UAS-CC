<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AgriSmart</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

<div class="min-h-screen">

    <!-- Navbar -->
    <nav class="bg-green-700 shadow-lg">

        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <a href="{{ Auth::user()->role == 'admin' ? route('dashboard') : route('buyer.dashboard') }}"
               class="text-3xl font-bold text-white flex items-center gap-2">

                🌱 <span>AgriSmart</span>

            </a>

            <!-- Menu -->
            <div class="flex items-center gap-6 text-white font-medium">

                @if(Auth::user()->role == 'admin')

                    <a href="{{ route('dashboard') }}"
                       class="hover:text-yellow-300 duration-200">
                        Dashboard
                    </a>

                                     <a href="{{ route('products.index') }}"
                       class="hover:text-yellow-300 duration-200">
                        Produk
                    </a>

                    <a href="{{ route('fertilizers.index') }}"
                       class="hover:text-yellow-300 duration-200">
                        Pupuk
                    </a>

                    <a href="{{ route('consultations.index') }}"
                       class="hover:text-yellow-300 duration-200">
                        Konsultasi
                    </a>

                    <a href="{{ route('admin.orders.index') }}"
                       class="hover:text-yellow-300 duration-200">
                        📦 Pesanan
                    </a>

                @else

                    <a href="{{ route('buyer.dashboard') }}"
                       class="hover:text-yellow-300 duration-200">
                        Dashboard
                    </a>

                    <a href="{{ route('marketplace') }}"
                       class="hover:text-yellow-300 duration-200">
                        Marketplace
                    </a>

                    <a href="{{ route('cart.index') }}"
                       class="hover:text-yellow-300 duration-200">
                        🛒 Keranjang
                    </a>

                    <a href="{{ route('orders.index') }}"
                       class="hover:text-yellow-300 duration-200">
                        📦 Pesanan Saya
                    </a>

                    <a href="{{ route('consultations.index') }}"
                       class="hover:text-yellow-300 duration-200">
                        Konsultasi
                    </a>

                @endif

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg text-white transition">
                        Logout
                    </button>

                </form>

            </div>

        </div>

    </nav>

    <!-- Isi -->
    <main class="max-w-7xl mx-auto p-8">

        {{ $slot }}

    </main>

</div>

</body>

</html>