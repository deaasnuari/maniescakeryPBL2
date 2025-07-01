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

    public function toggleStatus(Request $request)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized');
        }

        $ids = $request->input('selected_products', []);
        $action = $request->input('action');
        if (empty($ids)) {
            return back()->with('error', 'Tidak ada produk yang dipilih.');
        }

        $status = $action === 'enable' ? 1 : 0;

        Produk::whereIn('id', $ids)->update(['status' => $status]);

        return back()->with('success', 'Status produk berhasil diperbarui.');
    }

}
