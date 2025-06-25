<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return back()->withErrors(['Username tidak ditemukan'])->withInput();
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['Password salah'])->withInput();
        }

        Auth::login($user);
        return redirect()->intended('/');
    }
public function showLoginForm()
{
    return view('pages.login');
}


// Function Login sebagai Guest
   public function guestLogin()
{
    // Buat user baru dengan username dan email acak
    $randomUsername = 'guest_' . Str::random(5); // contoh: guest_f93a7
    $randomEmail = $randomUsername . '@guest.test';

    $guest = User::create([
        'name' => 'Guest User',
        'username' => $randomUsername,
        'email' => $randomEmail,
        'telepon' => '0000000000',
        'password' => bcrypt(Str::random(10)), // random password
        'role' => 'guest',
    ]);

    Auth::login($guest);

   return redirect('/');

}

// Function hapus user guest saat logout
public function logout(Request $request)
{
    /** @var \App\Models\User $user */
    $user = Auth::user(); // Simpan user sebelum logout

    Auth::logout(); // Logout user terlebih dahulu

    // Hapus akun jika role-nya guest
    if ($user && $user->role === 'guest') {
        $user->delete();
    }

    // Hapus session & regenerate token
    $request->session()->invalidate();
    $request->session()->regenerateToken();

   
    return redirect()->route('login')->with('success', 'Logout berhasil. Silakan login kembali.');
}


}
