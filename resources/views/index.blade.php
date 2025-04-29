@extends('layouts.app')
@section('title', 'landing page')
@section('content')
  
    
{{-- Content --}}
<div class="w-screen">
    <img src="assets/natal.png" alt="Main Image" class="w-full h-100">
  </div>

  <div class="max-w-4xl mx-auto p-6">
    <div class="space-y-6">
      <div class="overflow-hidden rounded mb-6">
        <a href="/">
          <img src="assets/bread.png" alt="Cake" class="w-full object-cover h-64">
        </a>
      </div>
  
      <div class="overflow-hidden rounded mb-6">
        <a href="/">
          <img src="assets/danish.png" alt="Brownies" class="w-full object-cover h-64">
        </a>
      </div>
  
      <div class="overflow-hidden rounded mb-6">
        <a href="/">
          <img src="assets/cookies.png" alt="Cookies" class="w-full object-cover h-64">
        </a>
      </div>
  
      <div class="overflow-hidden rounded mb-6">
        <a href="/">
          <img src="assets/hampers.png" alt="Hampers" class="w-full object-cover h-64">
        </a>
      </div>
  
      <div class="overflow-hidden rounded mb-6">
        <a href="/">
          <img src="assets/grab.png" alt="Grab & Go" class="w-full object-cover h-64">
        </a>
      </div>
    </div>
  </div>
  
  
{{-- END Content --}}

@endsection