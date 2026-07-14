<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email',
            'photo'=>'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = Auth::user();

        if($request->hasFile('photo')){
            $photo = $request->file('photo')->store('profiles','public');
            $user->photo = $photo;
        }

        $user->name = $request->name;
        $user->email = $request->email;

        if($request->password){

            $request->validate([
                'password'=>'confirmed|min:8'
            ]);

            $user->password = Hash::make($request->password);
        }

        $user->save();

        return back()->with('success','Profil berhasil diperbarui.');
    }
}