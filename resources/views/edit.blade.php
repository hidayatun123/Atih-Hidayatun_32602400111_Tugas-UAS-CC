<x-app-layout>

    <div class="p-6">

       
        <form action="{{ route(update', $category) }}"
              method="POST">

           
            <div class="mb-4">
                <label>Deskripsi</label>

                <textarea
                    name="description"
                    class="border rounded w-full p-2">{{ $category->description }}</textarea>
            </div>

            <button
                class="bg-blue-600 text-white px-4 py-2 rounded">
                Update
            </button>

        </form>

    </div>

</x-app-layout>