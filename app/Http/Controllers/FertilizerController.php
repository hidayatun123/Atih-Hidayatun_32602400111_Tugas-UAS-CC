<?php

namespace App\Http\Controllers;

use App\Models\Fertilizer;
use Illuminate\Http\Request;

class FertilizerController extends Controller
{
    public function index()
    {
        $fertilizers = Fertilizer::latest()->get();

        return view('fertilizers.index', compact('fertilizers'));
    }

    public function create()
    {
        return view('fertilizers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Fertilizer::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('fertilizers.index')
            ->with('success', 'Pupuk berhasil ditambahkan.');
    }

    public function show(Fertilizer $fertilizer)
    {
        //
    }

    public function edit(Fertilizer $fertilizer)
    {
        return view('fertilizers.edit', compact('fertilizer'));
    }

    public function update(Request $request, Fertilizer $fertilizer)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $fertilizer->update($request->all());

        return redirect()->route('fertilizers.index')
            ->with('success', 'Pupuk berhasil diperbarui.');
    }

    public function destroy(Fertilizer $fertilizer)
    {
        $fertilizer->delete();

        return redirect()->route('fertilizers.index')
            ->with('success', 'Pupuk berhasil dihapus.');
    }
}