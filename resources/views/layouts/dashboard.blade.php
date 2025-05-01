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
<body class="flex flex-col min-h-screen">
    <header class="bg-[#493C32] h-16 flex items-center py-4 px-6 sticky top-0 z-50">
        <i class="border border-white p-2 rounded-full mr-10 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
        </i>
        <img src="assets/maniescakery2.png" alt="" class="w-40">
    </header>
    <div class="flex flex-1">
            <aside id="sidebar" class="fixed top-0 left-0 z-40 w-60 h-screen pt-16 transition-transform -translate-x-full lg:translate-x-0 bg-gray-200" aria-label="Sidebar">
            <nav class="flex flex-col h-full py-4 px-6">
                <div class="flex flex-col gap-5 flex-grow">
                    <a href="{{ route('dashboard') }}" class="py-1 px-4 {{ request()->routeIs('dashboard') ? 'font-bold nav-link-selected' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('productsdashboard') }}" class="py-1 px-4 {{ request()->routeIs('productsdashboard') ? 'font-bold nav-link-selected' : '' }}">
                        Products
                    </a>
                    <a href="{{ route('usersdashboard') }}" class="py-1 px-4 {{ request()->routeIs('usersdashboard') ? 'font-bold nav-link-selected' : '' }}">
                        Users
                    </a>
                </div>
                <div class="pt-4 border-t">
                    <a href="{{ route('catalog') }}" class="text-blue-600 hover:underline block">
                        Back to catalog page
                    </a>
                </div>
            </nav>
        </aside>

       <main class="flex-1 flex flex-col ml-60 p-10">
            @yield('content')
            
        </main>
    </div>
</body>
</html>