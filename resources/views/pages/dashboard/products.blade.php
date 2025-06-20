<!-- nama: dea asnuari -->
<!-- nim: 3312411001 -->

@extends('layouts.dashboard')
@section('title', 'Product Dashboard')

@section('content')
<div class="text-center font-bold text-xl">Welcome to the Product Dashboard</div>
<h1 class="text-2xl font-bold mb-6 mt-4">Data Product Dashboard</h1>

<!-- Tombol dan Search -->
<div class="mb-6 flex justify-between items-center">
    <form action="#" method="GET" class="w-full max-w-md">
        <label for="search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" name="search" id="search" class="block w-full py-2 pl-10 pr-28 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search by product name or category..." />
            <button type="submit" class="cursor-pointer absolute right-2.5 bottom-1.5 px-4 py-1 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-300">
                Search
            </button>
        </div>
    </form>
    <button type="button" onclick="document.getElementById('modalTambah').classList.remove('hidden')" class="cursor-pointer text-white bg-amber-600 hover:bg-amber-700 font-medium rounded-lg text-sm px-4 py-2">
        + Tambah Produk
    </button>
</div>

<!-- Modal Tambah Produk -->
<div id="modalTambah" class="fixed inset-0 z-50 hidden flex items-center justify-center backdrop-blur-sm">
    <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg relative">
        <h2 class="text-xl font-semibold mb-4">Tambah Produk</h2>
        <form>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Masukkan nama produk">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea class="w-full border rounded px-3 py-2" placeholder="Masukkan deskripsi"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Masukkan kategori">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Gambar</label>
                <input type="file" class="w-full">
            </div>
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="document.getElementById('modalTambah').classList.add('hidden')" class="cursor-pointer px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Batal</button>
                <button type="submit" class="cursor-pointer px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700">Simpan</button>
            </div>
        </form>
        <button onclick="document.getElementById('modalTambah').classList.add('hidden')" class="cursor-pointer absolute top-2 right-2 text-gray-500 hover:text-gray-700">✕</button>
    </div>
</div>

<!-- TABEL PRODUK -->
<div class="overflow-x-auto shadow-md rounded-lg">
    <table class="min-w-full table-fixed divide-y divide-gray-200">
        <thead class="bg-gray-50 text-xs font-semibold text-gray-700 uppercase">
            <tr>
                <th class="w-1/5 px-6 py-3 text-left">Nama Produk</th>
                <th class="w-1/4 px-6 py-3 text-left">Deskripsi</th>
                <th class="w-1/5 px-6 py-3 text-left">Gambar</th>
                <th class="w-1/5 px-6 py-3 text-left">Kategori</th>
                <th class="w-1/5 px-6 py-3 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @php
                $dummyProducts = [
                    ['nama_produk' => 'Brownies Cokelat', 'desc' => 'Brownies legit dan lembut', 'gambar' => 'brownies.jpg', 'kategori' => 'Cake'],
                    ['nama_produk' => 'Cheese Cake', 'desc' => 'Cake lembut rasa keju', 'gambar' => 'cheesecake.png', 'kategori' => 'Dessert'],
                    ['nama_produk' => 'Banana Bread', 'desc' => 'Roti pisang manis', 'gambar' => 'banana.jpg', 'kategori' => 'Bread'],
                ];
            @endphp

            @foreach($dummyProducts as $product)
            <tr class="hover:bg-gray-100">
                <td class="px-6 py-4 whitespace-nowrap">{{ $product['nama_produk'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $product['desc'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <img src="{{ asset('storage/images/' . $product['gambar']) }}" alt="{{ $product['nama_produk'] }}" class="w-16 h-16 object-cover rounded">
                </td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $product['kategori'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                    <button type="button" class="cursor-pointer px-3 py-1 text-sm font-medium text-red-600 bg-red-100 rounded hover:bg-red-200">🗑️ Delete</button>
                    <button type="button" class="cursor-pointer px-3 py-1 text-sm font-medium text-yellow-600 bg-yellow-100 rounded hover:bg-yellow-200">✏️ Edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
