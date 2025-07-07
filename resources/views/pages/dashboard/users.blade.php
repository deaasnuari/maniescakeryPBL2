<!-- nama: dea asnuari -->
<!-- nim: 3312411001 -->

@extends('layouts.dashboard')
@section('title', 'Users Dashboard')

@section('content')
{{-- <div class="text-center font-bold text-xl">Welcome to the Users Dashboard</div> --}}
<h1 class="text-2xl font-bold mb-6 mt-4">User Dashboard</h1>

<!-- Search Only -->
<div class="mb-6 flex justify-start">
    <form action="{{ route('users.index') }}" method="GET" class="w-full max-w-md">
        <label for="search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" name="search" id="search" value="{{ request('search') }}" class="block w-full py-2 pl-10 pr-28 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search by username, email, or telephone..." />
            <button type="submit" class="cursor-pointer absolute right-2.5 bottom-1.5 px-4 py-1 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-300">
                Search
            </button>
        </div>
    </form>
</div>

<!-- TABEL USER -->
<div class="overflow-x-auto shadow-md rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50 text-xs font-semibold text-gray-700 uppercase">
            <tr>
                <th class="px-6 py-3 text-left w-1/5">Name</th>
                <th class="px-6 py-3 text-left w-1/4">Email</th>
                <!-- <th class="px-6 py-3 text-left w-1/5">Telephone</th> -->
                <th class="px-6 py-3 text-left w-1/5">Username</th>
                <th class="px-6 py-3 text-left w-1/5">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($users as $user)
            <tr class="hover:bg-gray-100">
                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ $user->username }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                <!-- <td class="px-6 py-4 whitespace-nowrap">{{ $user->telepon }}</td> -->
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->username }}</td>
                <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                    <button type="button" data-modal-target="editModal{{ $user->id }}" data-modal-toggle="editModal{{ $user->id }}" class="cursor-pointer px-3 py-1 text-sm font-medium text-blue-600 bg-blue-100 rounded hover:bg-blue-200 inline-flex items-center gap-1">✏️ Edit</button>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin hapus user ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="cursor-pointer px-3 py-1 text-sm font-medium text-red-600 bg-red-100 rounded hover:bg-red-200 inline-flex items-center gap-1">🗑️ Delete</button>
                    </form>

                    <!-- Modal Edit -->
                    <div id="editModal{{ $user->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full inset-0 h-[calc(100%-1rem)] max-h-full bg-black/50">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow">
                                <button type="button" class="cursor-pointer absolute top-3 right-2.5 text-gray-400 hover:text-gray-900 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="editModal{{ $user->id }}">
                                    <svg class="w-3 h-3" viewBox="0 0 14 14" fill="none">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l12 12M13 1L1 13" />
                                    </svg>
                                </button>
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold mb-4 text-gray-900">Edit User</h3>
                                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                                            <input type="text" name="username" value="{{ $user->username }}" required class="w-full border border-gray-300 p-2 rounded">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                            <input type="email" name="email" value="{{ $user->email }}" required class="w-full border border-gray-300 p-2 rounded">
                                        </div>
                                        <!-- <div class="mb-4">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Telephone</label>
                                            <input type="text" name="telepon" value="{{ $user->telepon }}" class="w-full border border-gray-300 p-2 rounded">
                                        </div> -->
                                        <div class="flex justify-end gap-2">
                                            <button type="button" data-modal-hide="editModal{{ $user->id }}" class="cursor-pointer px-4 py-2 text-sm text-gray-600 bg-gray-100 rounded hover:bg-gray-200">Cancel</button>
                                            <button type="submit" class="cursor-pointer px-4 py-2 text-sm text-white bg-blue-600 rounded hover:bg-blue-700">Simpan</button>
                                            @if(session('success'))
                                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100" role="alert">
                                                {{ session('success') }}
                                            </div>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal Edit -->

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center py-4 text-gray-500">Data tidak ditemukan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
