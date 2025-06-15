<!-- nama: dea asnuari
nim: 3312411001 -->
@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-white">
    <div class="w-full max-w-lg p-12 bg-white rounded-lg shadow-sm">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-10">Buat Akun</h2>

        {{-- Flash Message --}}
        @if (session('success'))
            <div class="mb-4 text-green-600 text-sm text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error Message --}}
        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register.post') }}">

            @csrf

            <div class="mb-4">
                <input 
                    type="text" 
                    name="username" 
                    id="username" 
                    required 
                    placeholder="Username"
                    class="w-full p-3 bg-gray-100 border border-transparent rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#DFAC6B]"
                >
            </div>

            <div class="mb-4">
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    required 
                    placeholder="Email"
                    class="w-full p-3 bg-gray-100 border border-transparent rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#DFAC6B]"
                >
            </div>

            <div class="mb-4">
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    required 
                    placeholder="Password"
                    class="w-full p-3 bg-gray-100 border border-transparent rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#DFAC6B]"
                >
            </div>

            <div class="mb-6">
                <input 
                    type="password" 
                    name="password_confirmation" 
                    id="password_confirmation" 
                    required 
                    placeholder="Konfirmasi password"
                    class="w-full p-3 bg-gray-100 border border-transparent rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#DFAC6B]"
                >
            </div>

            <div class="flex justify-center">
                <button type="submit" class="text-white bg-[#4B372F] hover:bg-[#3a2b25] focus:ring-10 focus:outline-none focus:ring-[#DFAC6B] shadow-lg shadow-[#4B372F]/50 font-large rounded-lg text-sm px-15 py-3 text-center mb-2">
                    Buat
                </button>
            </div>

            <p class="text-sm text-center text-gray-600 mt-6">
                Sudah punya akun? <a href="{{ route('login') }}" class="font-semibold text-[#4B372F] hover:underline">Login</a>
            </p>
        </form>
    </div>
</div>
@endsection
