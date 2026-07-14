<x-app-layout>

<div class="max-w-6xl mx-auto py-8">

    <h1 class="text-3xl font-bold text-green-700 mb-6">
        📦 Riwayat Pesanan
    </h1>

    <table class="w-full bg-white rounded-lg shadow">

        <thead class="bg-green-600 text-white">

            <tr>
                <th class="p-3">No</th>
                <th class="p-3">Tanggal</th>
                <th class="p-3">Total</th>
                <th class="p-3">Status</th>
            </tr>

        </thead>

        <tbody>

        @forelse($orders as $order)

            <tr class="border-b">

                <td class="p-3">
                    {{ $loop->iteration }}
                </td>

                <td class="p-3">
                    {{ $order->created_at->format('d-m-Y') }}
                </td>

                <td class="p-3">
                    Rp {{ number_format($order->total,0,',','.') }}
                </td>

                <td class="p-3">

                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded">

                        {{ $order->status }}

                    </span>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="4" class="text-center py-8">

                    Belum ada pesanan

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

</x-app-layout>