<!-- nama: dea asnuari
nim: 3312411001 -->

@extends('layouts.dashboard')

@section('title', 'Product Dashboard')

@section('content')
    <h1><div class="text-center font-bold">Welcome to the Product Dashboard</div></h1>
    <h1 class="text-2xl font-bold mb-6">Data Product Dashboard</h1>

    <div class="flex justify-between items-center mb-4">
        <div class="relative flex items-center space-x-2">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" class="block w-64 p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white" placeholder="Search...">
            </div>



{{-- button tambah Produk --}}
<button 
    type="button" 
    onclick="document.getElementById('modalTambah').classList.remove('hidden')" 
    class="text-white bg-amber-600 hover:bg-amber-700 font-medium rounded-lg text-sm px-4 py-2"
>
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
                <button type="button" onclick="document.getElementById('modalTambah').classList.add('hidden')" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Batal</button>
                <button type="submit" class="px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700">Simpan</button>
            </div>
        </form>
        <!-- Tombol close pojok kanan -->
        <button onclick="document.getElementById('modalTambah').classList.add('hidden')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
            ✕
        </button>
    </div>
</div>
{{-- end Button tambah Produk --}}





        <button id="sortDropdownButton" data-dropdown-toggle="sortDropdown" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-3 py-2" type="button">
            <span class="sr-only">Sort options</span>
            SORT BY
            <svg class="w-2.5 h-2.5 ml-2.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>
        <div id="sortDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
            <ul class="py-2 text-sm text-gray-700" aria-labelledby="sortDropdownButton">
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Name (A-Z)</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Name (Z-A)</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Category</a></li>
            </ul>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Produk</th>
                    <th scope="col" class="px-6 py-3">Desc</th>
                    <th scope="col" class="px-6 py-3">Gambar</th>
                    <th scope="col" class="px-6 py-3">Kategori</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $dummyProducts = [
                        ['nama_produk' => 'Brownies Cokelat', 'desc' => 'Brownies legit dan lembut', 'gambar' => 'brownies.jpg', 'kategori' => 'Cake'],
                        ['nama_produk' => 'Cheese Cake', 'desc' => 'Cake lembut rasa keju', 'gambar' => 'cheesecake.png', 'kategori' => 'Dessert'],
                        ['nama_produk' => 'Banana Bread', 'desc' => 'Roti pisang manis', 'gambar' => 'banana.jpg', 'kategori' => 'Bread'],
                    ];
                @endphp

                @foreach($dummyProducts as $product)
                <tr class="bg-gray-100 border-b hover:bg-gray-200">
                    <td class="px-6 py-4">{{ $product['nama_produk'] }}</td>
                    <td class="px-6 py-4">{{ $product['desc'] }}</td>
                    <td class="px-6 py-4">
                    <img src="{{ asset('storage/images/' . $product['gambar']) }}" 
                    alt="{{ $product['nama_produk'] }}" class="w-16 h-16 object-cover rounded"></td>
                    <td class="px-6 py-4">{{ $product['kategori'] }}</td>
                    <td class="px-6 py-4 flex gap-2">
                        <button type="button" class="text-white bg-red-500 hover:bg-red-600 font-medium rounded-lg text-sm p-2">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                        <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 font-medium rounded-lg text-sm p-2">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection




