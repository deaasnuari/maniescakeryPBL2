{{-- 
NAMA : Hamdan Azmi
NIM  : 3312411004
KELAS: IF 2 A Malam

--}}




@extends('layouts.app')
@section('title', 'landing page')
@section('content')
  
    
{{-- Content --}}
<div class="w-screen">
  <img src="/assets/natal.png" alt="Main Image" class="w-full h-100">
</div>
<div class="max-w-4xl mx-auto p-6 space-y-6">



{{-- Item Template --}}
@php
  $items = [
    ['title' => 'Cake', 'img' => asset('assets/Cake-M.png')],
    ['title' => 'Brownies', 'img' => asset('assets/Brownies-M.png')],
    ['title' => 'Cookies', 'img' => asset('assets/Cookies-M.png')],
    ['title' => 'Hampers', 'img' => asset('assets/Hampers-M.png')],
    ['title' => 'Small', 'img' => asset('assets/Small-M.png')],
  ];
@endphp

@foreach ($items as $item)
  <div class="relative group overflow-hidden rounded-lg shadow-xl hover:shadow-2xl mb-6 transition-all duration-300 transform hover:scale-105">
    <a href="/">
      <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-center items-center p-6">
        <h2 class="text-white text-4xl font-extrabold tracking-wide uppercase transform translate-y-8 group-hover:translate-y-0 transition-all duration-500">
          {{ $item['title'] }}
        </h2>
        <span class="mt-4 px-6 py-2 border-2 border-white text-white text-sm rounded-full bg-white/20 hover:bg-white/30 backdrop-blur-sm transition-colors duration-300 transform group-hover:scale-110">
          See More
        </span>
      </div>
    </a>
    <div class="absolute top-2 right-2 flex space-x-2 z-10">
      <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="bg-blue-500 text-white px-3 py-1 text-sm rounded hover:bg-blue-600">
        <!-- Edit Icon -->
       <div> <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
        </svg>
        </div
      </button>
      <button onclick="window.location.href='/'" class="bg-red-500 text-white px-3 py-1 text-sm rounded hover:bg-red-600">
        <!-- Delete Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9M9.25 5.79a48.11 48.11 0 0 1 3.478-.397 48.108 48.108 0 0 1 3.478.397m-.001 0V4.874c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201V5.79m0 0a48.108 48.108 0 0 0-3.478.397L4.772 19.673A2.25 2.25 0 0 0 7.016 21.75h10.968a2.25 2.25 0 0 0 2.244-2.077L19.5 6.187a48.108 48.108 0 0 0-3.478-.397" />
        </svg>
      </button>
    </div>
  </div>
@endforeach




{{-- END Content --}}

@endsection