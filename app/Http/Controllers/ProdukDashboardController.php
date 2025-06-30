<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;


class ProdukDashboardController extends Controller
{
    public function index()
    {
        $products = Produk::all();
        $categories = Kategori::all();
        $editStatus = false;

        return view('pages.dashboard.products', compact('products', 'categories', 'editStatus'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'kategori' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link_instagram' => 'nullable|url|starts_with:https://www.instagram.com/',

        ]);

        // Handle file upload
        $gambarName = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = $gambar->store('images', 'public');
            // dd($gambarName);
        }

        // Create new product
        Produk::create([
    'nama' => $request->nama,
    'deskripsi' => $request->deskripsi,
    'harga' => $request->harga,
    'kategori' => $request->kategori,
    'gambar' => $gambarName,
    'status' => true,
    'link_instagram' => $request->link_instagram,
]);


        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $product)
    {
        $categories = Kategori::all();
        $products = Produk::all();
        $editStatus = true;
        return view('pages.dashboard.products', compact('product', 'categories', 'products', 'editStatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $product)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'kategori' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

       $data = [
    'nama' => $request->nama,
    'deskripsi' => $request->deskripsi,
    'harga' => $request->harga,
    'kategori' => $request->kategori,
    'link_instagram' => $request->link_instagram,
];


        $product->update($data);



        // Handle file upload if new image is provided
        if ($request->hasFile('gambar')) {
            // Delete old image if exists
            if ($product->gambar && Storage::exists('public/images/' . $product->gambar)) {
                Storage::delete('public/images/' . $product->gambar);
            }

            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->storeAs('public/images', $gambarName);
            $data['gambar'] = $gambarName;
        }

        $product->update($data);

        return redirect()->back()->with('success', 'Produk berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $product)
    {
        // Delete image file if exists
        if ($product->gambar && Storage::exists('public/images/' . $product->gambar)) {
            Storage::delete('public/images/' . $product->gambar);
        }

        $product->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }
}
