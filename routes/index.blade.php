@extends('layouts.app')
@section('title', 'landing page')
@section('content')
  
    
{{-- Content --}}
<div class="w-screen">
    <img src="assets/natal.png" alt="Main Image" class="w-full h-100">
  </div>

 {{-- Kategori Gambar --}}

<div class="max-w-4xl mx-auto p-6 space-y-6">
 <!-- Cake -->
  <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform hover:scale-105">
    <a href="products">
      <img src="assets/Cake-M.png" alt="Cake" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">    
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-center items-center p-6">
        <h2 class="text-white text-4xl font-extrabold tracking-wide uppercase transform translate-y-8 group-hover:translate-y-0 transition-all duration-500">Cake</h2>
        <span class="mt-4 px-6 py-2 border-2 border-white text-white text-sm rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-sm transition-colors duration-300 transform group-hover:scale-110">
          See More
        </span>
      </div>
    </a>
  </div>

 <!-- Brownies -->
  <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform hover:scale-105">
    <a href="products">
      <img src="assets/Brownies-M.png" alt="Brownies" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-center items-center p-6">
        <h2 class="text-white text-4xl font-extrabold tracking-wide uppercase transform translate-y-8 group-hover:translate-y-0 transition-all duration-500">Brownies</h2>
        <span class="mt-4 px-6 py-2 border-2 border-white text-white text-sm rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-sm transition-colors duration-300 transform group-hover:scale-110">
          See More
        </span>
      </div>
    </a>
  </div>

 <!-- Cookies -->
  <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform hover:scale-105">
    <a href="products">
      <img src="assets/Cookies-M.png" alt="Cookies" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-center items-center p-6">
        <h2 class="text-white text-4xl font-extrabold tracking-wide uppercase transform translate-y-8 group-hover:translate-y-0 transition-all duration-500">Cookies</h2>
        <span class="mt-4 px-6 py-2 border-2 border-white text-white text-sm rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-sm transition-colors duration-300 transform group-hover:scale-110">
          See More
        </span>
      </div>
    </a>
  </div>

 <!-- Hampers -->
  <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform hover:scale-105">
    <a href="products">
      <img src="assets/Hampers-M.png" alt="Hampers" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-center items-center p-6">
        <h2 class="text-white text-4xl font-extrabold tracking-wide uppercase transform translate-y-8 group-hover:translate-y-0 transition-all duration-500">Hampers</h2>
        <span class="mt-4 px-6 py-2 border-2 border-white text-white text-sm rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-sm transition-colors duration-300 transform group-hover:scale-110">
          See More
        </span>
      </div>
    </a>
  </div>

  <!-- Small Cake -->
  <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform hover:scale-105">
    <a href="products">
      <img src="assets/Small-M.png" alt="Small Cake" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">      
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-center items-center p-6">
        <h2 class="text-white text-4xl font-extrabold tracking-wide uppercase transform translate-y-8 group-hover:translate-y-0 transition-all duration-500">Small Cake</h2>
        <span class="mt-4 px-6 py-2 border-2 border-white text-white text-sm rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-sm transition-colors duration-300 transform group-hover:scale-110">
          See More
        </span>
      </div>
    </a>
  </div>
</div>



<div class="max-w-6xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
  <!-- Item Start -->
  @foreach ([
    ['title' => 'Cake', 'image' => 'Cake-M.png'],
    ['title' => 'Brownies', 'image' => 'Brownies-M.png'],
    ['title' => 'Cookies', 'image' => 'Cookies-M.png'],
    ['title' => 'Hampers', 'image' => 'Hampers-M.png'],
    ['title' => 'Small Cake', 'image' => 'Small-M.png']
  ] as $item)
  <div class="relative group overflow-hidden rounded-2xl bg-white shadow-lg transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
    <a href="products">
      <!-- Background blur -->
      <img src="assets/{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">

      <!-- Gradient Overlay -->
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/30 to-black/60 group-hover:backdrop-blur-sm transition-all duration-500"></div>

      <!-- Content Overlay -->
      <div class="absolute bottom-0 w-full p-4 text-center">
        <h2 class="text-white text-2xl font-bold tracking-wide uppercase drop-shadow-md">{{ $item['title'] }}</h2>
        <span class="mt-2 inline-block px-4 py-1 text-sm text-white border border-white rounded-full bg-white/10 hover:bg-white/20 transition-colors duration-300">See More</span>
      </div>

      <!-- Top-left floating badge -->
      <div class="absolute top-4 left-4 bg-white text-gray-800 text-xs font-semibold px-2 py-1 rounded shadow">
        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-4 h-4 mr-1 text-yellow-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.27L18.18 21l-1.45-6.18L22 9.24l-6.25-.54L12 3 8.25 8.7 2 9.24l5.27 5.58L5.82 21z"/></svg>
        Special
      </div>
    </a>
  </div>
  @endforeach
</div>



{{-- END Content --}}

@endsection