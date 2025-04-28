@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-white">
    <div class="w-full max-w-lg p-12 bg-white rounded-lg shadow-sm">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-10">Login</h2>

        {{-- Flash Message --}}
        @if (session('success'))
            <div class="mb-6 text-green-600 text-sm text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error Message --}}
        @if ($errors->any())
            <div class="mb-6 text-red-600 text-sm text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-6">
                <input 
                    type="text" 
                    name="email" 
                    id="email" 
                    required 
                    placeholder="Username or Email"
                    class="block w-full p-4 text-base text-gray-900 bg-gray-200 border border-transparent rounded focus:ring-[#DFAC6B] focus:border-[#DFAC6B] focus:outline-none"
                >
            </div>

            <div class="mb-4">
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    required 
                    placeholder="Password"
                    class="block w-full p-4 text-base text-gray-900 bg-gray-200 border border-transparent rounded focus:ring-[#DFAC6B] focus:border-[#DFAC6B] focus:outline-none"
                >
            </div>

            <div class="flex justify-end mb-6">
                <a href="#" class="text-sm text-[#4B372F] hover:underline">Lupa Password</a>
            </div>

            
            <div class="flex justify-center">
                <button type="submit" class="text-white bg-[#4B372F] hover:bg-[#3a2b25] focus:ring-8 focus:outline-none focus:ring-[#DFAC6B] shadow-lg shadow-[#4B372F]/50 font-large rounded-lg text-sm px-15 py-3 text-center mb-2">
                    Masuk
                </button>
            </div>


           

            <p class="text-sm text-center text-gray-600 mt-6">
                Buat account? <a href="{{ route('register') }}" class="font-semibold text-[#4B372F] hover:underline">Buat account</a>
            </p>
        </form>
    </div>
</div>
@endsection
