<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua kategori untuk ditampilkan sebagai filter
        $kategoris = Kategori::limit(5)->get();

        // Ambil ID kategori aktif dari query string, default ke ID 6 jika tidak ada
        $kategoriAktif = $request->query('kategori', 'cupcake');

        // Ambil produk sesuai kategori aktif
        $products = Produk::where('kategori', $kategoriAktif)->get();

        return view('pages.product_page', compact('kategoris', 'kategoriAktif', 'products'));
    }

    public function show($id)
    {
        // Ambil produk berdasarkan ID beserta relasi kategori-nya (jika ada)
        $produk = Produk::findOrFail($id);

        // Kirim ke view detail
        return view('pages.produk_detail', compact('produk'));
    }

}
