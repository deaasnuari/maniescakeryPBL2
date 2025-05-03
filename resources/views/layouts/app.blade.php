<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Manies Cakery')</title>
    <link rel="stylesheet" href="css/flowbite.min.css">
    <script src="js/flowbite.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#F4EDE1] ">
    <header class="bg-[#493C32] flex items-center py-4 px-10 justify-between">
        <img src="assets/maniescakery2.png" alt="" class="w-40">
        <div class="text-white flex gap-15">
            <a href="/" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">Home</a>
            <a href="/products" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">Product</a>
            <a href="/about_us" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">About Us</a>
            <a href="/dashboard" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">Dashboard</a>
            <a href="/login" class="py-1 px-4 hover:text-[#DFAC6B] duration-100">Login</a>
        </div>
    </header>
    <main class="min-h-screen mb-46 p-10">
        @yield('content')
    </main>
    <footer class="flex flex-col">
        <div class="bg-[#DFAC6B] flex items-center justify-between px-10 relative h-30 text-white font-bold">
            <div class="flex items-center gap-20">
                <p class="text-2xl"> follow us on:</p>
                <div class="flex gap-5 items-center">
                    <a href=""><img class="w-8" src="assets/icons/wa.png" alt=""></a>
                    <a href=""><img class="w-8" src="assets/icons/gojek.icon.png" alt=""></a>
                    <a href=""><img class="w-8" src="assets/icons/instagram.png" alt=""></a>
                </div>
            </div>
            <div class="absolute top-[-12%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                <img src="assets/PI.png" alt="">
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