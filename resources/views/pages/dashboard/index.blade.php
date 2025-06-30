{{-- 
NAMA : Hamdan Azmi
NIM  : 3312411004
KELAS: IF 2 A Malam

--}}



@extends('layouts.dashboard')
@section('title', 'dashboard admin')
@section('content')

{{-- Content --}}

<div class="w-full bg-white px-8 py-6 space-y-6 rounded-xl shadow-lg">
    <div class="text-left font-extrabold text-3xl text-gray-800 -mt-2">HOME</div>
    <div class="bg-gradient-to-r from-[#F7F7F7] via-[#FFFFFF] to-[#F7F7F7] border border-gray-300 rounded-xl px-8 py-6 shadow-lg">
        <div class="text-2xl font-bold text-[#493C32]">
            Selamat datang, <span class="italic text-[#8B4513]">{{ Auth::user()->username }}</span>
        </div>
        <div class="text-md text-gray-600 mt-2">
            Anda login sebagai <span class="font-semibold text-[#493C32]">{{ ucfirst(Auth::user()->role ?? 'Pengguna') }}</span>
        </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Produk -->
        <div class="bg-gradient-to-r from-[#D1E5F2] to-[#BCCCE4] rounded-xl p-8 border border-gray-200 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
            <div class="flex items-center mb-4">
                <div class="bg-[#493C32] p-3 rounded-full text-white">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18M3 12h18M3 21h18" />
                    </svg>
                </div>
                <span class="text-gray-500 text-lg uppercase ml-4">Jumlah Produk</span>
            </div>
            <div class="text-5xl font-extrabold text-[#493C32]">128</div>
            <p class="text-sm text-gray-600 mt-3">Tolong tambah lagi Produknya

            </p>
        </div>

        <!-- Pengguna -->
        <div class="bg-gradient-to-r from-[#E1E9F0] to-[#C4D9E1] rounded-xl p-8 border border-gray-200 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
            <div class="flex items-center mb-4">
                <div class="bg-[#493C32] p-3 rounded-full text-white">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zM3 21h18c0-4-3.59-7-8-7H11c-4.41 0-8 3-8 7z"/>
                    </svg>
                </div>
                <span class="text-gray-500 text-lg uppercase ml-4">Pengguna</span>
            </div>
           <div class="text-5xl font-extrabold text-[#493C32]">{{ $jumlahPengguna }}</div>
            <p class="text-sm text-gray-600 mt-3">Jumlah total pengguna yang terdaftar. Teruskan memperluas komunitas kami!</p>
        </div>
    </div>
</div>


<!-- Tabel Produk-->
    <div class="bg-[#FAF4EF] rounded-xl p-6 shadow-md border border-[#E4D9CC] hover:shadow-lg transition">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-[#5D3A00]">🍰 Produk Terbaru</h3>
        </div>
        <table class="w-full text-sm text-[#4B3A2C]">
            <thead>
                <tr class="text-left uppercase text-[#7A5C3E] tracking-wider bg-[#EFE3D8]">
                    <th class="py-3 px-4 rounded-tl-xl text-center">Nama Produk</th>
                    <th class="py-3 px-4 text-center">Kategori</th>
                    <th class="py-3 px-4 text-center">Jumlah Ulasan</th>
                    <th class="py-3 px-4 rounded-tr-xl text-center">Tanggal Ditambahkan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#E0D2C3]">
                @foreach ($latestProducts as $product)     
                <tr class="hover:bg-[#F4ECE4] transition">
                    <td class="py-3 px-4 text-center">{{ $product->nama }}</td>
                    <td class="py-3 px-4 text-center">{{ $product->kategori }}</td>
                    <td class="py-3 px-4 text-center">{{ '-' }}</td>
                    <td class="py-3 px-4 text-center">{{ $product->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


{{-- TABEL --}}
<div class="w-full bg-white px-8 py-6 space-y-6 rounded-xl shadow-xl mt-8">
 <!-- Tabel User-->
    <div class="bg-[#FAF4EF] rounded-xl p-6 shadow-md border border-[#E4D9CC] hover:shadow-lg transition">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-[#5D3A00]">👥 User Terbaru</h3>
        </div>
        <table class="w-full text-sm text-[#4B3A2C]">
            <thead>
                <tr class="text-left uppercase text-[#7A5C3E] tracking-wider bg-[#EFE3D8]">
                    <th class="py-3 px-4 rounded-tl-xl text-center">Nama</th>
                    <th class="py-3 px-4 text-center">Email</th>
                    <th class="py-3 px-4 text-center">Username</th>
                    <!-- <th class="py-3 px-4 text-center">No HP</th> -->
                    <th class="py-3 px-4 rounded-tr-xl text-center">Tanggal Bergabung</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#E0D2C3]">
    @foreach ($latestUsers as $user)
        <tr class="hover:bg-[#F4ECE4] transition">
            <td class="py-3 px-4 text-center">{{ $user->username }}</td>
            <td class="py-3 px-4 text-center">{{ $user->email }}</td>
            <td class="py-3 px-4 text-center">{{ $user->username }}</td>
            <!-- <td class="py-3 px-4 text-center">{{ $user->telepon }}</td> -->
            <td class="py-3 px-4 text-center">
            {{ $user->created_at ? date('Y-m-d', strtotime($user->created_at)) : '-' }}
        </td>
        </tr>
    @endforeach
</tbody>
        </table>
    </div>

 


<!-- riwayat aktivitas -->
<!-- <div class="bg-white rounded-xl p-6 shadow-md border border-gray-100 mt-6">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-lg font-semibold text-gray-800">Riwayat Aktivitas</h3>
        <i class="fas fa-clock text-[#8B5E3C] text-xl"></i>
    </div>
    <div class="relative pl-4 border-l-4 border-[#C8B6A6] space-y-6">
 Act 1
        <div class="relative pl-4">
            <div class="absolute left-[-0.63rem] top-1 w-4 h-4 bg-[#8B5E3C] border-2 border-white rounded-full shadow"></div>
            <p class="text-sm text-gray-700">
                <span class="font-semibold text-[#8B5E3C]">Fatra</span> login ke sistem
            </p>
            <span class="text-xs text-gray-500">01 Mei 2025 • 08:45</span>
        </div>

 Act 2
        <div class="relative pl-4">
            <div class="absolute left-[-0.63rem] top-1 w-4 h-4 bg-[#8B5E3C] border-2 border-white rounded-full shadow"></div>
            <p class="text-sm text-gray-700">
                Menambahkan produk <span class="font-semibold text-[#8B5E3C]">Kue Talam</span>
            </p>
            <span class="text-xs text-gray-500">30 April 2025 • 16:20</span>
        </div>

 Act 3
        <div class="relative pl-4">
            <div class="absolute left-[-0.63rem] top-1 w-4 h-4 bg-[#8B5E3C] border-2 border-white rounded-full shadow"></div>
            <p class="text-sm text-gray-700">
                Menambahkan user <span class="font-semibold text-[#8B5E3C]">Rina</span>
            </p>
            <span class="text-xs text-gray-500">30 April 2025 • 14:10</span>
        </div>
    </div>
</div>  -->


{{-- END Content --}} 

@endsection 