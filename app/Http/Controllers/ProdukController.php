<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\kategori;

class ProdukController extends Controller
{
    public function index($param)
    {
        if ($param == "*") {
            $products = Produk::all(); // tampilkan semua produk
        } else {
            $products = Produk::where('kategori', $param)->get(); // filter berdasarkan kategori
        }

        $categories = Kategori::all();
        $selectedCategories = $param;

        return view('pages.product_page', compact('products', 'categories', 'selectedCategories'));
    }


    public function produkDetail($id)
    {
        $produk = Produk::findOrFail($id); // akan throw 404 kalau tidak ketemu
        return view('pages.produk_detail', compact('produk'));
    }

}
