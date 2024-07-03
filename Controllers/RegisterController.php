<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('aanmelden');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect('aanmelden')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = new User();
        $user->name = $request->name ?? 'Anonymous';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/')->with('success', 'Account succesvol aangemaakt!');
    }
}


?>