<x-app-layout>

<div class="max-w-7xl mx-auto py-8">

    <h1 class="text-3xl font-bold text-green-700 mb-6">
        📦 Data Pesanan
    </h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-5">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-green-600 text-white">

                <tr>
                    <th class="p-4">No</th>
                    <th class="p-4">Pembeli</th>
                    <th class="p-4">Total</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Aksi</th>
                    <th class="p-4">Detail</th>
                </tr>

            </thead>

            <tbody>

            @forelse($orders as $order)

                <tr class="border-b">

                    <td class="p-4">
                        {{ $loop->iteration }}
                    </td>

                    <td class="p-4">
                        {{ $order->user->name }}
                    </td>

                    <td class="p-4">
                        Rp {{ number_format($order->total,0,',','.') }}
                    </td>

                    <td class="p-4">

                        @if($order->status == 'Diproses')

                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                                Diproses
                            </span>

                        @else

                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                                Selesai
                            </span>

                        @endif

                    </td>

                    <td class="p-4">

                        @if($order->status == 'Diproses')

                            <form method="POST"
                                  action="{{ route('admin.orders.update',$order) }}">

                                @csrf
                                @method('PUT')

                                <button
                                    class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">

                                    Selesai

                                </button>

                            </form>

                        @else

                            ✅

                        @endif

                    </td>
                   <td class="p-4">

    @foreach($order->items as $item)

        <div>
            {{ $item->product->name }}
            ({{ $item->quantity }} x
            Rp {{ number_format($item->price,0,',','.') }})
        </div>

    @endforeach

</td>  
                </tr>

            @empty

                <tr>

                    <td colspan="5"
                        class="text-center p-8 text-gray-500">

                        Belum ada pesanan.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>