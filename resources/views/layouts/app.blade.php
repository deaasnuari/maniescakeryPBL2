<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Manies Cakery')</title>
    <link rel="stylesheet" href="{{ asset('css/flowbite.min.css') }}">
    <script src="{{ asset('js/flowbite.min.js') }}"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F4EDE1]">
    <header class="bg-[#493C32] flex items-center py-4 px-10 justify-between">
        <img src="{{ asset('assets/maniescakery2.png') }}" alt="" class="w-40">
        <div class="text-white flex gap-15 items-center">
            <a href="/" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">Home</a>
            <a href="{{ url('/produk/kategori/6') }}" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">Product</a>
            <a href="/about_us" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">About Us</a>
            <a href="/profil" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">Profil</a>

            @auth
                @if (Auth::user()->role === 'admin')
                    <a href="/productsdashboard" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">Dashboard</a>
                @endif

               
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">Logout</button>
                </form>
            @else
                <a href="/login" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">Login</a>
            @endauth
        </div>
    </header>

    <main class="min-h-screen mb-46 mx-10">
        @yield('content')
    </main>

    <footer class="flex flex-col">
        <div class="bg-[#DFAC6B] flex items-center justify-between px-10 relative h-30 text-white font-bold">
            <div class="flex items-center gap-20">
                <p class="text-2xl"> follow us on:</p>
                <div class="flex gap-5 items-center">
                    <a href="#"><img class="w-8" src="{{ asset('assets/icons/wa.png') }}" alt=""></a>
                    <a href="#"><img class="w-8" src="{{ asset('assets/icons/gojek.icon.png') }}" alt=""></a>
                    <a href="#"><img class="w-8" src="{{ asset('assets/icons/instagram.png') }}" alt=""></a>
                </div>
            </div>
            <div class="absolute top-[-12%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                <img src="{{ asset('assets/PI.png') }}" alt="">
            </div>
            <div class="text-2xl text-center text-bold">
                <p>Made with Love, <br>Enjoyed with Happiness</p>
            </div>
        </div>
        <div class="bg-[#493C32] text-white flex justify-center py-5">
            <p>copyright © 2025 Manies Cakery</p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
