{{-- 
NAMA : Hamdan Azmi
NIM  : 3312411004
KELAS: IF 2 A Malam

--}}

@extends('layouts.app')
@section('title', 'landing page')
@section('content')
<div class="w-full border">
    <img src="assets/natal.png" alt="Main Image" class="w-full h-80 border">
</div>
<div class="flex flex-col">
  <section class="flex items-center justify-center p-10 gap-20">
    <div class="text-center flex-1">
      <p class="font-norican text-accent text-6xl capitalize">manies cakery</p>
      <p class="text-center text-xl">is a home-made cake shop that presents a variety of sweet choices made with all the heart. Serving a variety of brownies, cookies, breads, and other special cakes with delicious flavors and perfect textures. We also offer customizable cakes to suit your personal preferences, whether it's for birthdays, weddings, or any celebration. Every order is freshly made to ensure quality and satisfaction in every bite.<p><br>
      <a href="about_us" class="bg-secondary text-white px-16 py-2 inline-block rounded-xl">About Us</a>
    </div>
    <div class="w-1/2 flex justify-center">
      <img src="{{ asset('assets/image.png') }}" alt="" class="w-120 rounded-3xl">
    </div>
  </section>
  <section class="flex flex-row-reverse items-center justify-center p-10 gap-20 bg-white">
    <div class="text-center flex-1">
      <p class="text-2xl text-accent">TASTE OUR INGREDIENTS <br> Discover our Products</p>
      <p class="text-center text-xl"><br>
      Kami menyediakan berbagai varian kue lengkap dan kekinian, cocok untuk segala momen spesial Anda. Dengan bahan berkualitas dan cita rasa terbaik, kami juga siap memenuhi permintaan khusus sesuai keinginan pelanggan.
      <p><br>
      <a href="about_us" class="bg-secondary text-white px-16 py-2 inline-block rounded-xl">All Products</a>
    </div>
    <div class="w-1/2 flex justify-center">
      <img src="{{ asset('assets/cake6.png') }}" alt="" class="w-120 rounded-3xl">
    </div>
  </section>
  </section>
    <div class="grid grid-cols-2 grid-rows-2 gap-x-6 mx-10">
      <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform">
        <a href="products">
          <img src="{{ asset('assets/Cookies-M.png') }}" alt="Cookies" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="hover:bg-black/30 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center flex-col text-center text-white">
            <h2 class="text-4xl">Cookies</h2>
            <span class="transition-transform duration-300 hidden group-hover:inline-block">See More</span>
          </div>
        </a>
      </div>
      <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform">
        <a href="products">
          <img src="{{ asset('assets/Brownies-M.png') }}" alt="Cookies" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="hover:bg-black/30 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center flex-col text-center text-white">
            <h2 class="text-4xl">Brownies</h2>
            <span class="transition-transform duration-300 hidden group-hover:inline-block">See More</span>
          </div>
        </a>
      </div>
      <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform">
        <a href="products">
          <img src="{{ asset('assets/Cake-M.png') }}" alt="Cookies" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="hover:bg-black/30 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center flex-col text-center text-white">
            <h2 class="text-4xl">Cake</h2>
            <span class="transition-transform duration-300 hidden group-hover:inline-block">See More</span>
          </div>
        </a>
      </div>
       <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform">
        <a href="products">
          <img src="{{ asset('assets/Hampers-M.png') }}" alt="Cookies" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
          <div class="hover:bg-black/30 w-full h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center flex-col text-center text-white">
            <h2 class="text-4xl">Hampers</h2>
            <span class="transition-transform duration-300 hidden group-hover:inline-block">See More</span>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section>
    <div class="bg-neutral-500 w-full h-22 grid place-items-center my-10 capitalize font-norican text-5xl text-amber-300 tracking-wider">our favourite</div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-15 mx-10">
            @for($i = 0; $i < 8; $i++)
            <div class="flex flex-col border border-gray-400 shadow rounded overflow-hidden">
              <a href="{{ route('produkdetail') }}" class="w-full">
                  <img src="../../assets/CustomMatcha.jpg" alt="Custom Matcha" class="object-cover w-full h-55"/>
                  <div class="h-12 text-center flex items-center justify-center font-bold bg-white text-secondary">Brownies coklat</div>
              </a>
            </div>
            @endfor 
        </div>
  </section>
</div>
@endsection