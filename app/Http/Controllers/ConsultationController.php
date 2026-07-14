<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    if (auth()->user()->role == 'admin') {

        $consultations = Consultation::with('user')->latest()->get();

    } else {

        $consultations = Consultation::where('user_id', auth()->id())
                            ->latest()
                            ->get();

    }

    return view('consultations.index', compact('consultations'));
}

    
   public function create()
{
    return view('consultations.create');
} 

  
public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'question' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $image = null;

    if ($request->hasFile('image')) {
        $image = $request->file('image')->store('consultations', 'public');
    }

    Consultation::create([
        'user_id' => Auth::id(),
        'title' => $request->title,
        'question' => $request->question,
        'image' => $image,
        'status' => 'pending',
    ]);

    return redirect()->route('consultations.index')
        ->with('success', 'Konsultasi berhasil dikirim.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(Consultation $consultation)
{
    return view('consultations.edit', compact('consultation'));
}
    
    
public function update(Request $request, Consultation $consultation)
{
  $request->validate([
    'title' => 'required',
    'question' => 'required',
    'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
]);

    $consultation->update([
        'answer' => $request->answer,
        'status' => 'answered'
    ]);

    return redirect()->route('consultations.index')
        ->with('success', 'Jawaban berhasil dikirim.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consultation $consultation)
{
    $consultation->delete();

    return redirect()->route('consultations.index')
        ->with('success', 'Konsultasi berhasil dihapus.');
}
}
