<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('pages.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:user,username',
            'email'    => 'required|email|max:255|unique:user,email',
            'password' => 'required|string|min:6|confirmed',
            'role'     => 'required|in:admin,superadmin',
            'bypass_password' => 'required_if:role,admin,superadmin',
        ]);

        // Cek password bypass sesuai role
        $isBypassValid =
            ($request->role === 'admin' && $request->bypass_password === '123456') ||
            ($request->role === 'superadmin' && $request->bypass_password === '121233');

        if (!$isBypassValid) {
            return back()->withErrors(['bypass_password' => 'Password bypass salah'])->withInput();
        }

        User::create([
            'username' => $request->username,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
