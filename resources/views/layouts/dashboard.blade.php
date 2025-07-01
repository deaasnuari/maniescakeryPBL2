<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Manies Cakery')</title>
    <link rel="stylesheet" href="{{ asset('css/flowbite.min.css') }}">
    <script src="{{ asset('js/flowbite.min.js') }}" defer></script>
    @vite('resources/css/app.css')
    @livewireStyles
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggle = document.getElementById('toggleSidebar');
            const sidebar = document.getElementById('sidebar');
            toggle.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
            });
        });
    </script>
</head>

<body class="flex flex-col min-h-screen">
    <header class="bg-[#493C32] h-16 flex items-center py-4 px-6 sticky top-0 z-50 shadow-md">
        <button id="toggleSidebar" class="border border-white p-2 rounded-full mr-4 lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
        <img src="{{ asset('assets/maniescakery2.png') }}" alt="Manies Cakery Logo" class="w-32 md:w-40">
    </header>

    <div class="flex flex-1">
        <aside id="sidebar"
            class="fixed top-0 left-0 z-40 w-60 h-screen pt-16 transition-transform -translate-x-full lg:translate-x-0 bg-gray-100 border-r border-gray-300">
            <nav class="flex flex-col h-full py-4 px-6">
                <div class="flex flex-col gap-2 flex-grow">
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center gap-3 py-2 px-4 rounded-md hover:bg-gray-200 transition-all duration-150 {{ request()->routeIs('dashboard') ? 'bg-white font-semibold text-blue-600 shadow' : '' }}">
                        <span>Home</span>
                    </a>
                    <a href="{{ route('dashboard.product.index') }}"
                        class="flex items-center gap-3 py-2 px-4 rounded-md hover:bg-gray-200 transition-all duration-150 {{ request()->routeIs('dashboard.product.index') ? 'bg-white font-semibold text-blue-600 shadow' : '' }}">
                        <span>Products</span>
                    </a>
                    <a href="{{ route('usersdashboard') }}"
                        class="flex items-center gap-3 py-2 px-4 rounded-md hover:bg-gray-200 transition-all duration-150 {{ request()->routeIs('usersdashboard') ? 'bg-white font-semibold text-blue-600 shadow' : '' }}">
                        <span>Users</span>
                    </a>
                </div>
                <div class="pt-4 border-t">
                    <a href="{{ url('/') }}" class="text-blue-600 hover:underline block">
                        Kembali ke katalog
                    </a>
                </div>
            </nav>
        </aside>

        <main class="flex-1 flex flex-col p-6 transition-all duration-300 lg:ml-60">
            @yield('content')
        </main>
    </div>
</body>

</html>
