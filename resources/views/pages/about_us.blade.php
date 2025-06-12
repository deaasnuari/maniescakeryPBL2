<!-- 
    Nama : Fatra Syahreza
    NIM  : 3312411031
    Kelas: IF 2A Malam
-->

@extends('layouts.app')
@section('title', 'About Us')
@section('content')

<!-- Button kecil fixed di kiri atas -->
<div class="max-w-5xl mx-auto px-6 md:px-12 py-4">
    <a href="/about_us_admin"
        class="inline-block bg-amber-600 hover:bg-amber-700 text-white text-xs font-semibold py-2 px-3 rounded shadow-md transition duration-300"
       class="inline-block bg-amber-600 hover:bg-amber-700 text-white text-xs font-semibold py-2 px-3 rounded shadow-md transition duration-300"
    >
        ← About Us Admin
    </a>
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
                <div>
                    <p class="text-2xl font-bold">
                        <span class="font-norican text-3xl text-amber-950">Manies.Cakery</span> is a home-made cake shop 
                        that presents a variety of sweet choices made with all the heart, serving a variety of 
                        brownies, cookies, breads, and other special cakes with delicious flavors and perfect textures.
                    </p>
                </div>
                <div>
                    <p class="text-M p-8 leading-relaxed">
                    Produk Kami menghasilkan cake & brownies premium yang dibuat dengan bahan-bahan alami berkualitas tinggi. 
                    Menggabungkan resep tradisional dengan kreasi modern, setiap produk kami memiliki rasa otentik, 
                    tekstur yang lembut, dan kualitas yang selalu terjaga.
                    </p>
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
                <div>
                    <p class="font-bold text-xl leading-relaxed">
                    Where smiles are served daily<br>
                    Enjoy delicious pastries, warm breads, stunning cakes and expertly brewed drinks while feeling right at home
                </p>
                </div>
                <div>
                    <p class="text-M leading-relaxed">
                    Cake & Brownies Manies Cakery, we prioritize quality, taste, and presentation in every product we create. 
                    We believe that excellence is achieved through a combination of passion, precision, and innovation.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center min-h-screen p-8 mb-[-350px]">
        <div class="grid grid-cols-6 grid-rows-4 gap-4 max-w-5xl w-full h-[700px]">
           
            <div class="col-start-1 col-span-2 row-start-1 row-span-2 items-center justify-center">
            <img src="assets/CustomMatcha.jpg" alt="Custom Matcha"
                class="w-50 h-65 object-cover rounded-4xl shadow-md ml-16" />
            </div>

            <div class="col-span-2 row-span-2">
            <img src="assets/DuoBrownies.jpg" alt="Duo Brownies"
                class="w-80 h-45 object-cover rounded-4xl shadow-md ml-4" />
            </div>

            <div class="col-span-2 row-span-3">
            <img src="assets/BoluPisang.jpg" alt="Bolu Pisang"
                class="w-75 h-100 object-cover rounded-4xl shadow-md mr-4" />
            </div>

            <div class="col-start-1 col-span-2 row-start-3 row-span-1 flex items-center justify-center">
            <img src="assets/CustomBrownies.jpg" alt="Custom Brownies"
                class="w-70 h-35 object-cover rounded-2xl shadow-md mb-50" />
            </div>

            <div class="col-start-3 col-span-1 row-start-3 row-span-1 flex items-center justify-center">
            <img src="assets/MiniBrowkies.jpg" alt="Mini Browkies"
                class="w-60 h-40 object-cover rounded-2xl shadow-md mb-55 mr-2  " />
            </div>

            <div class="col-start-3 col-span-2 row-start-3 row-span-1 flex items-center justify-center">
            <img src="assets/Bround_U.jpg" alt="BROUND U"
                class="w-40 h-40 object-cover rounded-2xl shadow-md mb-80 ml-42" />
            </div>

        </div>
  </div>
</section>
@endsection
