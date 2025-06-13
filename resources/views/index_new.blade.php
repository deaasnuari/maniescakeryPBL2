{{-- 
NAMA : Hamdan Azmi
NIM  : 3312411004
KELAS: IF 2 A Malam

--}}

@extends('layouts.app')
@section('title', 'Manies Cakery - Home')
@section('content')
<br>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/natal.png') }}" class="absolute block w-full h-100 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/natal.png') }}" class="absolute block w-full h-100 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/natal.png') }}" class="absolute block w-full h-100 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/natal.png') }}" class="absolute block w-full h-100 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('assets/natal.png') }}" class="absolute block w-full h-100 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
<br><br>
    <section class="flex justify-between items-center">
        <div class="w-1/2 text-center">
            <p class="text-accent font-norican text-5xl capitalize">manies cakery</p><br>
            <p class="text-xl">Toko kue rumahan yang menyajikan berbagai pilihan manisan yang dibuat dengan sepenuh hati. Menyajikan berbagai brownies, kue kering, roti, dan kue-kue istimewa lainnya dengan cita rasa lezat dan tekstur yang sempurna. Kami juga menawarkan kue-kue yang dapat disesuaikan dengan preferensi pribadi Anda, baik untuk ulang tahun, pernikahan, atau perayaan apa pun. Setiap pesanan dibuat segar untuk memastikan kualitas dan kepuasan dalam setiap gigitan.</p>
            <br><br>
            <a href="#" class="bg-secondary px-10 py-2 text-white font-bold tracking-wide uppercase rounded">
            about us</a>
        </div>
        <img src="{{ asset('assets/image.png') }}" alt="" class="w-120 rounded-2xl">
    </section>
<br><br>
    <section class="flex flex-row-reverse justify-between items-center">
        <div class="w-1/2 text-center">
            <p class="text-accent text-3xl capitalize">RASAKAN LEZATNYA BAHAN PILIHAN! <br> Temukan Produk Kami</p><br>
            <p class="text-xl">Kami menyediakan berbagai varian kue lengkap dan kekinian, cocok untuk segala moment spesial Anda. Dengan bahan berkualitas dan cita rasa terbaik, kami juga siap memenuhi permintaan khusus sesuai keinginan pelanggan.</p>
            <br><br>
            <a href="#" class="italic tracking-wide rounded underline text-xl text-secondary">lihat produk manies cakery -></a>
        </div>
        <img src="{{ asset('assets/cake6.png') }}" alt="" class="w-120 rounded-2xl">
    </section>
    <br>
    <hr class="text-secondary">
    <br>
    <div class="bg-neutral-800 flex items-center justify-center h-20">
        <p class="text-white font-norican text-4xl tracking-wider capitalize">best seller</p>
    </div>
    <br>
    <section class="grid grid-cols-2 grid-rows-2 gap-x-8">
      <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl transition-all duration-300 transform">
        <a href="products">
          <img src="{{ asset('assets/Cookies-M.png') }}" alt="Cookies" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="hover:bg-black/30 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center flex-col text-center text-white">
            <h2 class="text-5xl">Cookies</h2>
            <span class="transition-transform duration-300 hidden group-hover:inline-block">See More</span>
          </div>
        </a>
      </div>
      <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl transition-all duration-300 transform">
        <a href="products">
          <img src="{{ asset('assets/Brownies-M.png') }}" alt="Cookies" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="hover:bg-black/30 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center flex-col text-center text-white">
            <h2 class="text-5xl">Brownies</h2>
            <span class="transition-transform duration-300 hidden group-hover:inline-block">See More</span>
          </div>
        </a>
      </div>
      <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform">
        <a href="products">
          <img src="{{ asset('assets/Cake-M.png') }}" alt="Cookies" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="hover:bg-black/30 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center flex-col text-center text-white">
            <h2 class="text-5xl">Cake</h2>
            <span class="transition-transform duration-300 hidden group-hover:inline-block">See More</span>
          </div>
        </a>
      </div>
       <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform">
        <a href="products">
          <img src="{{ asset('assets/Hampers-M.png') }}" alt="Cookies" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="hover:bg-black/30 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center flex-col text-center text-white">
            <h2 class="text-5xl">Hampers</h2>
            <span class="transition-transform duration-300 hidden group-hover:inline-block">See More</span>
          </div>
        </a>
      </div>
    </section>
    
    <br>
    <section class="px-10 py-6 bg-white rounded-xl shadow border-2 border-dashed border-secondary">
        <p class="text-center text-5xl font-norican text-accent capitalize">menu favorit</p>
        <br>
        <div class="flex justify-between">
            <div class="relative group overflow-hidden rounded-full size-70 shadow-xl hover:shadow-2xl hover:scale-90 transition-all duration-300 transform hover:cursor-pointer">
                <a href="products">
                <img src="{{ asset('assets/CustomMatcha.jpg') }}" alt="Cookies" class="w-full object-cover  transition-transform duration-500 group-hover:scale-110">
                </a>
                <div class="hover:bg-black/30 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2    -translate-y-1/2 flex justify-center items-center flex-col text-center text-white">
                <h2 class="text-xl">cake 1</h2>
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-full size-70 shadow-xl hover:shadow-2xl hover:scale-90 transition-all duration-300 transform hover:cursor-pointer">
                <a href="products">
                <img src="{{ asset('assets/CustomMatcha.jpg') }}" alt="Cookies" class="w-full object-cover transition-transform duration-500 group-hover:scale-110">
                </a>
                <div class="hover:bg-black/30 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center flex-col text-center text-white">
                <h2 class="text-xl">cake 2</h2>
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-full size-70 shadow-xl hover:shadow-2xl hover:scale-90 transition-all duration-300 transform hover:cursor-pointer">
                <a href="products">
                <img src="{{ asset('assets/CustomMatcha.jpg') }}" alt="Cookies" class="w-full object-cover transition-transform duration-500 group-hover:scale-110">
                </a>
                <div class="hover:bg-black/30 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center flex-col text-center text-white">
                <h2 class="text-xl">cake 3</h2>
                </div>
            </div>
        </div>
    </section>
    <br>
    <hr class="text-secondary">
    <br>
    

@endsection