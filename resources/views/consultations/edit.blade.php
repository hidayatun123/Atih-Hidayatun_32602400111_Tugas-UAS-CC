<x-app-layout>

<div class="max-w-3xl mx-auto py-8">

    <h1 class="text-3xl font-bold text-green-700 mb-6">
        💬 Balas Konsultasi
    </h1>

    <div class="bg-white rounded-xl shadow-lg p-6">

        <div class="mb-5">
            <label class="font-bold">Judul</label>
            <p class="mt-2">{{ $consultation->title }}</p>
        </div>

        <div class="mb-5">
            <label class="font-bold">Pertanyaan</label>
            <p class="mt-2">
                {{ $consultation->question }}
            </p>
        </div>

        @if($consultation->image)
            <div class="mb-5">
                <label class="font-bold">Gambar</label>

                <img src="{{ asset('storage/'.$consultation->image) }}"
                     class="w-64 mt-3 rounded-lg border">
            </div>
        @endif

        <form method="POST"
              action="{{ route('consultations.update',$consultation) }}">

            @csrf
            @method('PUT')

            <label class="font-bold">
                Jawaban Admin
            </label>

            <textarea
                name="answer"
                rows="6"
                class="w-full border rounded-lg p-3 mt-2"
                required>{{ $consultation->answer }}</textarea>

            <button
                class="mt-5 bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg">

                Kirim Jawaban

            </button>

        </form>

    </div>

</div>

</x-app-layout>