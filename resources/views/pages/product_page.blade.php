@extends('layouts.app')
@section('title', 'Manies Cakery - Catalog')

@section('content')
<div class="py-8 min-h-screen">
    <div class="flex justify-between">
        <div class="flex items-center justify-start -mb-px">
            <span class="inline-block w-16 h-px bg-amber-950 mr-3"></span>
            <h3 class="uppercase tracking-widest text-amber-950 -mb-px font-bold">Our Products</h3>
        </div>
    </div>

    <br>

    <div class="flex justify-between flex-wrap gap-2">
            <a href="{{ route('produk.index', '*') }}" class="p-4 w-50 flex justify-center items-center rounded-md shadow font-semibold uppercase text-sm tracking-widest {{ $selectedCategories === '*' ? 'bg-accent text-white' : 'bg-white text-accent border border-accent' }}">
                    All
            </a>
        @foreach ($categories as $k)
            <a href="{{ route('produk.index', $k->nama) }}" class="p-4 w-50 flex justify-center items-center rounded-md shadow font-semibold uppercase text-sm tracking-widest {{ $selectedCategories === $k->nama ? 'bg-accent text-white' : 'bg-white text-accent border border-accent' }}">
                {{ $k->nama }}
            </a>
        @endforeach
    </div>

    <br><hr><br>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
        @foreach ($products as $produk)
            @include('components.catalogcard')
            @include('components.review_modal')
        @endforeach

        <!-- Card admin-only -->
        <div id="admin-only" data-modal-target="new-catalog" data-modal-toggle="new-catalog"
            class="hidden border border-gray-300 rounded-lg p-4 flex flex-col items-center justify-center cursor-pointer hover:shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <span class="mt-2 text-sm text-gray-600">Tambah Produk</span>
        </div>
    </div>
</div>

<!-- Modal Tambah Catalog -->
<div id="new-catalog" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-black/50">
    <div class="relative w-full max-w-2xl p-4">
        <div class="bg-white rounded-lg shadow">
            <div class="flex items-center justify-between p-4 border-b">
                <h3 class="text-lg font-semibold text-gray-900">Tambah Catalog</h3>
                <button type="button" data-modal-hide="new-catalog" class="text-gray-400 hover:text-gray-900">
                    ✖
                </button>
            </div>

            <div class="p-4 overflow-y-auto max-h-64">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="sticky top-0 bg-gray-100">
                        <tr>
                            <th class="px-4 py-2">Produk ID</th>
                            <th class="px-4 py-2">Nama Produk</th>
                            <th class="px-4 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $item->id }}</td>
                            <td class="px-4 py-2">{{ $item->nama }}</td>
                            <td class="px-4 py-2">
                                <a href="#" onclick="toggleStatus(this)" class="text-green-600 hover:underline">
                                    {{ $item->status ? 'Aktif' : 'Nonaktif' }}
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex justify-end p-4 border-t">
                <button data-modal-hide="new-catalog" type="button" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Kembali</button>
            </div>
        </div>
    </div>
</div>
@endsection
