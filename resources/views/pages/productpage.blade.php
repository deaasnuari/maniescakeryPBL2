@extends('layouts.app')
@section('title', 'catalog')
@section('content')

    <!-- Main Section -->
    <div class="mx-10 py-8 min-h-screen">
        <div class="flex items-center justify-start -mb-px">
            <span class="inline-block w-16 h-px bg-amber-950 mr-3"></span>
            <h3 class="uppercase tracking-widest text-amber-950 -mb-px font-bold">our products</h3>
        </div>
        <br>
        <div class="flex justify-between">
            <div class="py-3 px-15 uppercase rounded-md shadow-md inset-shadow-md bg-accent text-white font-bold tracking-widest cursor-pointer">cake</div>
            <div class="py-3 px-15 uppercase rounded-md shadow-md inset-shadow-md bg-white text-accent font-bold tracking-widest cursor-pointer">cookies</div>
            <div class="py-3 px-15 uppercase rounded-md shadow-md inset-shadow-md bg-white text-accent font-bold tracking-widest cursor-pointer">brownies</div>
            <div class="py-3 px-15 uppercase rounded-md shadow-md inset-shadow-md bg-white text-accent font-bold tracking-widest cursor-pointer">hampers</div>
            <div class="py-3 px-15 uppercase rounded-md shadow-md inset-shadow-md bg-white text-accent font-bold tracking-widest cursor-pointer">small cake</div>
        </div>
        <br>
        <div>
            <div class="text-2xl text-secondary font-bold">cake</div>
            <br>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-15">
            @for($i = 0; $i < 100; $i++)
               @include('components.catalogcard')
            @endfor
            </div>
        </div>
    </div>
</section>
@endsection