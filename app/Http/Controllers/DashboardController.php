<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;

class DashboardController extends Controller
{
   // Untuk halaman user full (misal: /users)
public function userList()
{
    $users = User::all();
    return view('pages.user.index', compact('users'));
}

// Untuk dashboard home admin
public function index()
    {
        $latestUsers = User::latest()->take(5)->get();
        $jumlahPengguna = User::count();
        $jumlahProduk = Produk::count();
        $latestProducts = Produk::latest()->take(5)->get();
        

        return view('pages.dashboard.index', compact('latestUsers', 'jumlahPengguna', 'latestProducts', 'jumlahProduk'));
    }
}
