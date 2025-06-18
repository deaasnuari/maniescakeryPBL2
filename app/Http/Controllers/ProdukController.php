<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    // public function show()
    // {
    //     $products = Produk::all();
    //     $kategori = Kategori::all();
    //     return view('pages.product_page', compact('products', 'kategori'));
    // }

    public function showByKategori($id)
    {
        $all_product = Produk::all();
        $products = Produk::where('kategori', $id)
                          ->where('status', 'available')
                          ->get();
        $kategori = Kategori::all();
        $selectedKategori = Kategori::findOrFail($id); // untuk tampilkan nama kategori terpilih

        return view('pages.product_page', compact('products', 'all_product', 'kategori', 'selectedKategori'))->with('kategoriAktif', $id);
    }

    public function produkDetail($id)
    {
        $produk = Produk::findOrFail($id);
        return view('pages.produk_detail', compact('produk'));
    }

    
}
