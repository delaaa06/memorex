<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisController extends Controller
{
    public function regis(Request $request)
    {
 
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:15',
            'username' => 'required|string|min:3|max:20|unique:users,username',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'first_name.required' => 'Nama depan harus diisi.',
            'last_name.required' => 'Nama belakang harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'phone.required' => 'Nomor telepon harus diisi.',
            'username.required' => 'Username harus diisi.',
            'username.min' => 'Username minimal 3 karakter.',
            'username.unique' => 'Username sudah digunakan.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ]);

        
        // Buat user baru
        $user = User::create([
            'name' => $validated['first_name'] . ' ' . $validated['last_name'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'phone' => $validated['phone'],
            'password' => Hash::make($validated['password']),
        ]);

        // Auto login setelah registrasi
        Auth::login($user);

        return redirect('/')->with('success', 'Registrasi berhasil! Selamat datang.');
    }
}