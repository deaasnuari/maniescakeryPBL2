<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    public function show()
    {
        $produk = Produk::all();
        $kategori = Kategori::all();
        return view('pages.product_page', compact('produk', 'kategori'));
    }

    public function showByKategori($id)
    {
        $produk = Produk::where('kategori', $id)->get();
        $kategori = Kategori::all(); // untuk tetap tampilkan semua kategori di view
        $selectedKategori = Kategori::findOrFail($id); // untuk tampilkan nama kategori terpilih

        return view('pages.product_page', compact('produk', 'kategori', 'selectedKategori'))->with('kategoriAktif', $id);
    }

    public function produkDetail($id)
    {
        $produk = Produk::findOrFail($id);
        return view('pages.produk_detail', compact('produk'));
    }


}
