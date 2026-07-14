<script>

const metode = document.getElementById('payment_method');

const rekening = document.getElementById('rekening');

metode.addEventListener('change', function(){

    if(this.value == 'Transfer' || this.value == 'DANA')
    {
        rekening.classList.remove('hidden');
    }
    else
    {
        rekening.classList.add('hidden');
    }

});

</script>
<x-app-layout>

<div class="max-w-6xl mx-auto py-8">

    <h1 class="text-3xl font-bold text-green-700 mb-6">
        🛒 Keranjang Belanja
    </h1>

    @if($carts->count())

    <table class="w-full bg-white rounded-lg shadow">

        <thead class="bg-green-600 text-white">

            <tr>
                <th class="p-3">Produk</th>
                <th class="p-3">Harga</th>
                <th class="p-3">Jumlah</th>
                <th class="p-3">Subtotal</th>
            </tr>

        </thead>

        <tbody>

        @php
            $total = 0;
        @endphp

        @foreach($carts as $cart)

            @php
                $subtotal = $cart->product->price * $cart->quantity;
                $total += $subtotal;
            @endphp

            <tr class="border-b">

                <td class="p-3">
                    {{ $cart->product->name }}
                </td>

                <td class="p-3">
                    Rp {{ number_format($cart->product->price,0,',','.') }}
                </td>

                <td class="p-3">
                    {{ $cart->quantity }}
                </td>

                <td class="p-3">
                    Rp {{ number_format($subtotal,0,',','.') }}
                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

    <div class="text-right mt-6">

        <h2 class="text-2xl font-bold mb-4">
            Total :
            Rp {{ number_format($total,0,',','.') }}
        </h2>

        <form action="{{ route('checkout') }}"
      method="POST"
      enctype="multipart/form-data"
      class="bg-white shadow rounded-lg p-6">

    @csrf

    <div class="mb-4">
        <label class="font-semibold">
            Metode Pembayaran
        </label>

        <select name="payment_method"
                id="payment_method"
                class="w-full border rounded-lg p-2 mt-2">

            <option value="COD">COD (Bayar di Tempat)</option>

            <option value="Transfer">
                Transfer Bank
            </option>

            <option value="DANA">
                DANA
            </option>

        </select>
    </div>

    <div id="rekening"
         class="hidden bg-green-50 p-4 rounded-lg mb-4">

        <h3 class="font-bold text-green-700">
            Rekening AgriSmart
        </h3>

        <p>🏦 BRI : 1234567890</p>

        <p>a.n AgriSmart</p>

        <hr class="my-3">

        <label class="font-semibold">
            Upload Bukti Transfer
        </label>

        <input
            type="file"
            name="payment_proof"
            class="w-full border rounded-lg p-2 mt-2">

    </div>

    <button
        class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">

        ✅ Checkout

    </button>

</form>

    </div>

    @else

        <div class="bg-white p-10 rounded-lg shadow text-center">

            <h2 class="text-2xl font-bold text-gray-600">
                Keranjang masih kosong
            </h2>

        </div>

    @endif

</div>

</x-app-layout>