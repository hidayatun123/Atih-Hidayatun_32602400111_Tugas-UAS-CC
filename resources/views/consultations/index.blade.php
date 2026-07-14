<x-app-layout>

<div class="max-w-7xl mx-auto py-8">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold text-green-700">
            🌿 Konsultasi
        </h1>

        @if(Auth::user()->role != 'admin')
            <a href="{{ route('consultations.create') }}"
               class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg">
                + Konsultasi Baru
            </a>
        @endif

    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-5">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow">

        @forelse($consultations as $consultation)

            <div class="border-b p-6">

                @if(Auth::user()->role == 'admin')
                    <p class="text-sm text-gray-500 mb-2">
                        👤 <b>{{ $consultation->user->name }}</b>
                    </p>
                @endif

                <h2 class="text-xl font-bold text-green-700">
                    {{ $consultation->title }}
                </h2>

                <p class="mt-2">
                    {{ $consultation->question }}
                </p>

                @if($consultation->image)
                    <img src="{{ asset('storage/'.$consultation->image) }}"
                         class="w-56 mt-4 rounded-lg border">
                @endif

                <div class="mt-4">

                    @if($consultation->status == 'pending')
                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                            Menunggu
                        </span>
                    @else
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                            Dijawab
                        </span>
                    @endif

                </div>

                @if($consultation->answer)
                    <div class="mt-4 bg-green-50 p-4 rounded-lg">
                        <b>Jawaban Admin:</b><br>
                        {{ $consultation->answer }}
                    </div>
                @endif

                {{-- Tombol Admin --}}
                @if(Auth::user()->role == 'admin')

                    <div class="mt-5 flex gap-3">

                        @if($consultation->status == 'pending')
                            <a href="{{ route('consultations.edit', $consultation) }}"
                               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                                Jawab Konsultasi
                            </a>
                        @endif

                        <form action="{{ route('consultations.destroy', $consultation) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus konsultasi ini?')">

                            @csrf
                            @method('DELETE')

                            <button
                                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
                                Hapus
                            </button>

                        </form>

                    </div>

                @else

                    {{-- Tombol Buyer --}}
                    @if($consultation->status == 'pending')

                        <div class="mt-5">

                            <form action="{{ route('consultations.destroy', $consultation) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus konsultasi ini?')">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
                                    Hapus
                                </button>

                            </form>

                        </div>

                    @endif

                @endif

            </div>

        @empty

            <div class="p-8 text-center text-gray-500">
                Belum ada konsultasi.
            </div>

        @endforelse

    </div>

</div>

</x-app-layout>