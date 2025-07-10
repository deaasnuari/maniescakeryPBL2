<!-- nama: dea asnuari
nim: 3312411001 -->
@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-white">
    <div class="w-full max-w-lg p-12 bg-white rounded-lg shadow-sm">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-10">Reset Password</h2>

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

        <form method="POST" action="{{ route('password.reset') }}">
            @csrf

            {{-- Password Baru --}}
            <div class="mb-6 relative">
                <input 
                    type="password" 
                    name="newpassword" 
                    id="newpassword" 
                    required 
                    placeholder="Masukkan Password Baru"
                    class="block w-full p-4 pr-12 text-base text-gray-900 bg-gray-100 border border-transparent rounded focus:ring-[#DFAC6B] focus:border-[#DFAC6B] focus:outline-none">
                <span
                    onclick="togglePassword('newpassword', this)"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-600 cursor-pointer"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="h-5 w-5" fill="none" viewBox="0 0 24 24" 
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 
                            0 8.268 2.943 9.542 7-1.274 4.057-5.064 
                            7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                    </svg>
                </span>
            </div>

            {{-- Konfirmasi Password --}}
            <div class="mb-6 relative">
                <input 
                    type="password" 
                    name="konfirmasi_password" 
                    id="konfirmasi_password" 
                    required 
                    placeholder="Konfirmasi Password"
                    class="block w-full p-4 pr-12 text-base text-gray-900 bg-gray-100 border border-transparent rounded focus:ring-[#DFAC6B] focus:border-[#DFAC6B] focus:outline-none">
                <span
                    onclick="togglePassword('konfirmasi_password', this)"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-600 cursor-pointer"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="h-5 w-5" fill="none" viewBox="0 0 24 24" 
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 
                            0 8.268 2.943 9.542 7-1.274 4.057-5.064 
                            7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
                    </svg>
                </span>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="text-white bg-[#4B372F] hover:bg-[#3a2b25] focus:ring-10 focus:outline-none focus:ring-[#DFAC6B] shadow-lg shadow-[#4B372F]/50 font-large rounded-lg text-sm px-6 py-3 text-center mb-2">
                    Konfirmasi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
<script>
    function togglePassword(inputId, el) {
        const input = document.getElementById(inputId);
        const isPassword = input.type === "password";
        input.type = isPassword ? "text" : "password";

        // Ganti icon
        el.innerHTML = isPassword
            ? `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 
                    0-8.268-2.943-9.542-7a9.973 9.973 0 012.174-3.338M9.88 
                    9.88a3 3 0 104.24 4.24" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />
               </svg>`
            : `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.522 
                    5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 
                    7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
               </svg>`;
    }
</script>

