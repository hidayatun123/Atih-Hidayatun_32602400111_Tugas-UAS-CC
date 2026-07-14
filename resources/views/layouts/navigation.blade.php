<nav class="bg-green-700 shadow-lg">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <span class="text-3xl">🌾</span>
                <span class="text-2xl font-bold text-white">
                    AgriSmart
                </span>
            </div>

            <!-- Menu -->
            <div class="flex items-center space-x-6">

                <a href="{{ route('dashboard') }}"
                   class="text-white hover:text-green-200 font-semibold transition">
                    Dashboard
                </a>

               
               <a href="{{ route('products.index') }}"
   class="text-white hover:text-green-200 font-semibold transition">
    Produk
</a>

<a href="{{ route('fertilizers.index') }}"
   class="text-white hover:text-green-200 font-semibold transition">
    Pupuk
</a>

<a href="{{ route('consultations.index') }}"
   class="text-white hover:text-green-200 font-semibold transition">
    Konsultasi
</a>
                

                <span class="text-green-200">
                    |
                </span>

                <span class="text-white font-semibold">
                    👤 {{ Auth::user()->name }}
                </span>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button
                        class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg text-white font-semibold transition">
                        Logout
                    </button>
                </form>

            </div>

        </div>
    </div>
</nav>