<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Menampilkan halaman profil
    public function show()
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        return view('pages.profil', compact('user'));
    }

    // Menangani pembaruan profil
    public function update(Request $request)
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login

        // Mengupdate data pengguna
        $user->username = $request->username;
        $user->email = $request->email;
        $user->telepon = $request->telepon;

        // Jika password diisi, maka update password
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password); // Enkripsi password
        }

        // Jika ada gambar yang diupload, simpan gambar
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
            $user->gambar = $path;
        }

        $user->save(); // Simpan perubahan ke database

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}
