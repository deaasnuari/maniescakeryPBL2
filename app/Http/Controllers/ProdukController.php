<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\kategori;

class ProdukController extends Controller
{
    public function index($param)
    {
        $products = Produk::where('kategori', $param)->get();
        $categories = Kategori::All();
        $selectedCategories = $param;

        return view('pages.product_page', compact('products', 'categories', 'selectedCategories'));
    }

    public function produkDetail($id)
    {
        $produk = Produk::findOrFail($id); // akan throw 404 kalau tidak ketemu
        return view('pages.produk_detail', compact('produk'));
    }

}
