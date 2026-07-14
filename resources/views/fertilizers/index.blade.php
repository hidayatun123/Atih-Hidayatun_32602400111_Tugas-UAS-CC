<x-app-layout>

<div class="max-w-7xl mx-auto py-8 px-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-green-700">
            🌿 Data Pupuk
        </h1>

        <a href="{{ route('fertilizers.create') }}"
           class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow">
            + Tambah Pupuk
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded-lg overflow-hidden">

        <table class="w-full">

            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="p-3">No</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Harga</th>
                    <th class="p-3">Stok</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($fertilizers as $fertilizer)

                <tr class="border-b hover:bg-green-50">

                    <td class="p-3">{{ $loop->iteration }}</td>

                    <td class="p-3">{{ $fertilizer->name }}</td>

                    <td class="p-3">
                        Rp {{ number_format($fertilizer->price,0,',','.') }}
                    </td>

                    <td class="p-3">
                        {{ $fertilizer->stock }}
                    </td>

                    <td class="p-3 flex gap-2">

                        <a href="{{ route('fertilizers.edit',$fertilizer->id) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded">
                            Edit
                        </a>

                        <form action="{{ route('fertilizers.destroy',$fertilizer->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Yakin hapus pupuk?')"
                                class="bg-red-600 text-white px-3 py-1 rounded">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="5" class="text-center py-5 text-gray-500">
                        Belum ada data pupuk.
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>