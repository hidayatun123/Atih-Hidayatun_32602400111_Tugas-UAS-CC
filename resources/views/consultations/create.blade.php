<x-app-layout>

<div class="max-w-xl mx-auto py-8">

    <h1 class="text-3xl font-bold mb-6">
        Buat Konsultasi
    </h1>

    <form method="POST"
          action="{{ route('consultations.store') }}"
          enctype="multipart/form-data">

        @csrf

        <input type="text"
               name="title"
               placeholder="Judul"
               class="w-full border p-3 rounded mb-4">

        <textarea
            name="question"
            rows="5"
            placeholder="Pertanyaan..."
            class="w-full border p-3 rounded mb-4"></textarea>
            

        <input type="file"
               name="image"
               class="mb-4">

        <button
            class="bg-green-600 text-white px-5 py-2 rounded">
            Kirim
        </button>

    </form>

</div>

</x-app-layout>