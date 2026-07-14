<x-app-layout>

<div class="max-w-3xl mx-auto py-8">

    <div class="bg-white rounded-xl shadow-lg p-6">

        <h1 class="text-3xl font-bold text-green-700 mb-6">
            👤 Akun Saya
        </h1>

        <div class="space-y-4">

            <div>
                <label class="font-bold">Nama</label>
                <p>{{ Auth::user()->name }}</p>
            </div>

            <div>
                <label class="font-bold">Email</label>
                <p>{{ Auth::user()->email }}</p>
            </div>

            <div>
                <label class="font-bold">Role</label>
                <p>{{ ucfirst(Auth::user()->role) }}</p>
            </div>

        </div>

    </div>

</div>

</x-app-layout>