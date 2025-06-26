@extends('layouts.dashboard')
@section('title', 'Product Dashboard')
@section('content')
{{-- @php
    dd(Route::currentRouteName());
@endphp --}}

<div class="text-center font-bold text-xl">Welcome to the Product Dashboard</div>
<h1 class="text-2xl font-bold mb-6 mt-4">Data Product Dashboard</h1>

<!-- ALERT -->
@if(session('success'))
    <div class="mb-4 p-4 text-green-800 bg-green-100 border border-green-200 rounded-lg">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="mb-4 p-4 text-red-800 bg-red-100 border border-red-200 rounded-lg">
        <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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
    <button data-modal-target="modalTambah" data-modal-toggle="modalTambah" type="button" class="cursor-pointer text-white bg-amber-600 hover:bg-amber-700 font-medium rounded-lg text-sm px-4 py-2">+ Tambah Produk</button>
</div>

<!-- Modal Tambah/Edit Produk -->
<div id="modalTambah" tabindex="-1" aria-hidden="true" class="{{ $editStatus ? '' : 'hidden' }} fixed top-0 left-0 right-0 z-50 flex items-center justify-center w-full h-screen bg-black/50">
    <div class="relative w-full max-w-md p-4">
        <div class="relative bg-white rounded-lg shadow">
            <!-- Header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900">
                    {{ $editStatus ? 'Edit Produk' : 'Tambah Produk' }}
                </h3>
                <a href="{{ route('dashboard.product.index') }}" class="text-gray-400 hover:bg-gray-100 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 0 1 1.414 0L10 8.586l4.293-4.293a1 1 0 0 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 0 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 0 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 0-1.414z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>

            <!-- Form -->
            <form class="p-6 space-y-4" action="{{ $editStatus ? route('dashboard.product.update', $product) : route('dashboard.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($editStatus)
                    @method('PUT')
                @endif

                <!-- Nama Produk -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" name="nama" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ $editStatus ? $product->nama : '' }}" required>
                </div>

                <!-- Deskripsi -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi" class="w-full border border-gray-300 rounded px-3 py-2" rows="3" required>{{ $editStatus ? $product->deskripsi : '' }}</textarea>
                </div>

                <!-- Kategori -->
                <!-- Kategori -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select name="kategori" class="w-full border border-gray-300 rounded px-3 py-2" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach($categories as $kategori)
                            @php
                                $selectedKategori = old('kategori', $editStatus ? $product->kategori : '');
                            @endphp
                            <option value="{{ $kategori->nama }}" {{ $selectedKategori === $kategori->nama ? 'selected' : '' }}>
                                {{ $kategori->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                
                <!-- Harga -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" name="harga" class="w-full border border-gray-300 rounded px-3 py-2" value="{{ $editStatus ? $product->harga : '' }}" required>
                </div>

                <!-- Gambar -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" name="gambar" class="w-full">
                    @if($editStatus && $product->gambar)
                        <img src="{{ asset('storage/images/' . $product->gambar) }}" class="w-20 h-20 mt-2 object-cover rounded border">
                    @endif
                </div>

                <!-- Tombol -->
                <div class="flex justify-end gap-2">
                    <a href="{{ route('dashboard.product.index') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Batal</a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        {{ $editStatus ? 'Update' : 'Simpan' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- TABEL PRODUK -->
<div class="overflow-x-auto shadow-md rounded-lg">
    <table class="min-w-full table-fixed divide-y divide-gray-200">
        <thead class="bg-gray-50 text-xs font-semibold text-gray-700 uppercase">
            <tr>
                <th class="w-1/5 px-6 py-3 text-left">Nama Produk</th>
                <th class="w-1/4 px-6 py-3 text-left">Deskripsi</th>
                <th class="w-1/5 px-6 py-3 text-left">Harga</th>
                <th class="w-1/5 px-6 py-3 text-left">Gambar</th>
                <th class="w-1/5 px-6 py-3 text-left">Kategori</th>
                <th class="w-1/5 px-6 py-3 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($products as $product)
            <tr class="hover:bg-gray-100">
                <td class="px-6 py-4 whitespace-nowrap">{{ $product->nama }}</td>
                <td class="px-6 py-4 whitespace-wrap">{{  $product->gambar }}</td>
                <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <img src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->gambar }}" class="w-16 h-16 object-cover rounded">
                </td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $product->kategori }}</td>
                <td class="px-6 py-4 whitespace-nowrap flex gap-2 items-center h-20">
                    <div class="flex gap-10">
                        <form action="{{ route('dashboard.product.destroy', $product) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="cursor-pointer px-3 py-1 text-sm font-medium text-red-600 bg-red-100 rounded hover:bg-red-200">🗑️ Delete</button>
                        </form>
                        <a href="{{ route('dashboard.product.edit', $product) }}" class="cursor-pointer px-3 py-1 text-sm font-medium text-yellow-600 bg-yellow-100 rounded hover:bg-yellow-200">✏️ Edit</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection