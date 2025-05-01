@extends('layouts.app')
@section('title', 'About Us')
@section('content')

@push('styles')
<style>
    .edit-icon {
        @apply absolute top-2 right-2 text-sm text-gray-700 bg-white p-1 rounded-full shadow hover:bg-gray-100 cursor-pointer z-10;
    }
</style>
@endpush

<!-- Banner Section -->
<div class="relative w-full mx-auto mt-0 group">
    <img src="/assets/natal.png" alt="Image" class="w-full h-100 editable-image" data-key="banner">
    <div class="edit-icon hidden group-hover:block" onclick="editImage(this)">✎</div>
</div>

<!-- Main Section -->
<div class="max-w-5xl mx-auto px-6 md:px-12 py-8 space-y-16">

    <!-- About Us Section -->
    <div>
        <div class="flex items-center justify-start p-4 -mb-px">
            <span class="inline-block w-16 h-px bg-amber-950 mr-3"></span>
            <h3 class="text-xs uppercase tracking-widest text-amber-950 -mb-px">About Us</h3>
        </div>
        <div class="grid md:grid-cols-2 p-4 gap-8 -mb-px">

            <div class="relative group">
                    <p class="text-2xl font-bold leading-relaxed editable-text">
                        <span class="font-norican text-3xl text-amber-950">Manies.Cakery</span> is a home-made cake shop 
                        that presents a variety of sweet choices made with all the heart, serving a variety of 
                        brownies, cookies, breads, and other special cakes with delicious flavors and perfect textures.
                    </p>
                <div class="edit-icon hidden group-hover:block" onclick="editText(this)">✎</div>
            </div>

            <div class="relative group">
                <p class="text-sm p-4 leading-relaxed editable-text">
                    Produk Kami menghasilkan cake & brownies premium yang dibuat dengan bahan-bahan alami berkualitas tinggi. 
                    Menggabungkan resep tradisional dengan kreasi modern, setiap produk kami memiliki rasa otentik, 
                    tekstur yang lembut, dan kualitas yang selalu terjaga.
                </p>
                <div class="edit-icon hidden group-hover:block" onclick="editText(this)">✎</div>
            </div>

        </div>
    </div>

    <!-- Our Philosophy Section -->
    <div>
        <div class="flex items-center justify-start p-4 -mb-px">
            <span class="inline-block w-16 h-px bg-amber-950 mr-3"></span>
            <h3 class="text-xs uppercase tracking-widest text-amber-950">Our Philosophy</h3>
        </div>
        <div class="grid md:grid-cols-2 p-4 gap-8 mb-0">
            
            <div class="relative group">
                <p class="font-bold text-xl leading-relaxed editable-text">
                    Where smiles are served daily<br>
                    Enjoy delicious pastries, warm breads, stunning cakes and expertly brewed drinks while feeling right at home
                </p>
                <div class="edit-icon hidden group-hover:block" onclick="editText(this)">✎</div>
            </div>

            <div class="relative group">
                <p class="text-sm leading-relaxed editable-text">
                    Cake & Brownies Manies Cakery, we prioritize quality, taste, and presentation in every product we create. 
                    We believe that excellence is achieved through a combination of passion, precision, and innovation.
                </p>
                <div class="edit-icon hidden group-hover:block" onclick="editText(this)">✎</div>
            </div>
        </div>
    </div>
</div>

<!-- Image Grid Section -->
<div class="flex justify-center min-h-screen p-8 mb-[-350px]">
    <div class="grid grid-cols-6 grid-rows-4 gap-4 max-w-5xl w-full h-[700px]">

        @php
            $images = [
                'CustomMatcha.jpg', 'DuoBrownies.jpg', 'BoluPisang.jpg',
                'CustomBrownies.jpg', 'MiniBrowkies.jpg', 'Bround_U.jpg'
            ];
        @endphp

        @foreach($images as $index => $img)
            <div class="relative group col-span-2 row-span-{{ $index < 3 ? 2 : 1 }}">
                <img src="/assets/{{ $img }}" alt="Image {{ $index+1 }}"
                     class="w-full h-full object-cover rounded-2xl shadow-md editable-image" data-key="image{{ $index }}">
                <div class="edit-icon hidden group-hover:block" onclick="editImage(this)">✎</div>
            </div>
        @endforeach

    </div>
</div>

<!-- JS for Inline Editing -->
<script>
    function editText(icon) {
        const container = icon.closest('.group');
        const textEl = container.querySelector('.editable-text');
        const original = textEl.innerHTML;

        const textarea = document.createElement('textarea');
        textarea.className = 'w-full p-2 border rounded text-sm';
        textarea.value = textEl.innerText;

        const saveBtn = document.createElement('button');
        saveBtn.className = 'mt-2 px-3 py-1 bg-[#493C32] text-white rounded hover:bg-[#382D24]';
        saveBtn.innerText = 'Simpan';

        textEl.replaceWith(textarea);
        icon.style.display = 'none';
        container.appendChild(saveBtn);

        saveBtn.onclick = () => {
            const p = document.createElement('p');
            p.className = textEl.className;
            p.innerHTML = textarea.value;
            container.replaceChild(p, textarea);
            container.removeChild(saveBtn);
            icon.style.display = '';
        }
    }

    function editImage(icon) {
        const container = icon.closest('.group');
        const img = container.querySelector('img');
        const url = prompt("Masukkan URL gambar baru:", img.src);
        if (url) img.src = url;
    }
</script>
@endsection
