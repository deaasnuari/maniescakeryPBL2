<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function checkEmail(Request $request)
    {
        $request->validate([
            'lupapassword' => 'required|email'
        ]);

        $user = User::where('email', $request->lupapassword)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['Email tidak ditemukan.']);
        }

        // Simpan email sementara di session untuk digunakan saat reset password
        session(['reset_email' => $user->email]);

        return redirect()->route('resetpassword');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'newpassword' => 'required|min:6',
            'konfirmasi_password' => 'required|same:newpassword'
        ]);

        $email = session('reset_email');

        if (!$email) {
            return redirect()->route('lupapassword')->withErrors(['Sesi tidak ditemukan, silakan ulangi proses.']);
        }

        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->route('lupapassword')->withErrors(['Email tidak ditemukan.']);
        }

        $user->password = Hash::make($request->newpassword);
        $user->save();

        // Hapus session reset_email
        session()->forget('reset_email');

        return redirect()->route('login')->with('success', 'Password berhasil diubah. Silakan login.');
    }
}
