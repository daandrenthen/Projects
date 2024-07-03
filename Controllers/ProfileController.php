<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validatie
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Voeg hier andere velden toe indien nodig
        ]);

        // Updaten van gebruiker
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Voeg hier andere velden toe indien nodig
        $user->save();

        return redirect()->back()->with('success', 'Profiel bijgewerkt.');
    }
}
