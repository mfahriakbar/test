<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'tittle' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'max:255', 'unique:users'],
            'notelp' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registrasi Berhasil!!!');

        return redirect('/login')->with('success', 'Registrasi Berhasil!!!');
    }
}
