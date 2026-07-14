<x-app-layout>

<div class="max-w-4xl mx-auto py-10">

@if(session('success'))
<div class="bg-green-100 text-green-700 p-4 rounded mb-6">
{{ session('success') }}
</div>
@endif

<div class="bg-white rounded-2xl shadow-lg overflow-hidden">

<div class="bg-green-700 p-8 text-center text-white">

@if(Auth::user()->photo)

<img src="{{ asset('storage/'.Auth::user()->photo) }}"
class="w-32 h-32 rounded-full mx-auto border-4 border-white object-cover">

@else

<div class="w-32 h-32 rounded-full bg-white text-green-700 flex items-center justify-center text-5xl mx-auto">

👤

</div>

@endif

<h2 class="text-3xl font-bold mt-4">

{{ Auth::user()->name }}

</h2>

<p>{{ Auth::user()->email }}</p>

</div>

<div class="p-8">

<form method="POST"
action="{{ route('profile.update') }}"
enctype="multipart/form-data">

@csrf
@method('PUT')

<label class="font-semibold">
Foto Profil
</label>

<input type="file"
name="photo"
class="w-full border rounded-lg p-2 mt-2 mb-5">

<label class="font-semibold">
Nama
</label>

<input
type="text"
name="name"
value="{{ old('name',Auth::user()->name) }}"
class="w-full border rounded-lg p-3 mb-5">

<label class="font-semibold">
Email
</label>

<input
type="email"
name="email"
value="{{ old('email',Auth::user()->email) }}"
class="w-full border rounded-lg p-3 mb-5">

<div class="grid md:grid-cols-2 gap-5">

<div>

<label class="font-semibold">
Password Baru
</label>

<input
type="password"
name="password"
class="w-full border rounded-lg p-3">

</div>

<div>

<label class="font-semibold">
Konfirmasi Password
</label>

<input
type="password"
name="password_confirmation"
class="w-full border rounded-lg p-3">

</div>

</div>

<div class="mt-6">

<p><b>Role :</b>

@if(Auth::user()->role=='admin')

<span class="text-red-600">Administrator</span>

@else

<span class="text-green-600">Buyer</span>

@endif

</p>

<p class="mt-2">

<b>Bergabung :</b>

{{ Auth::user()->created_at->format('d F Y') }}

</p>

</div>

<button
class="mt-8 bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">

💾 Simpan Perubahan

</button>

</form>

</div>

</div>

</div>

</x-app-layout>