@extends('layouts.app')
@section('title', 'About Us')
@section('content')

    <!-- Banner Section -->
    <div class="w-full mx-auto mt-0">
        <div class="overflow-hidden bg-gray-200 h-100">
        <!-- Image fills entire container -->
        <img src="/assets/natal.png" alt="Image" class="w-full h-100">
        </div>
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
                    <p class="text-sm p-4 leading-relaxed">
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
            <div class="grid md:grid-cols-2 p-4 gap-8 mb-4">
                <div>
                    <p class="font-bold text-xl leading-relaxed">
                    Where smiles are served daily<br>
                    Enjoy delicious pastries, warm breads, stunning cakes and expertly brewed drinks while feeling right at home
                </p>
                </div>
                <div>
                    <p class="text-sm leading-relaxed">
                    Cake & Brownies Manies Cakery, we prioritize quality, taste, and presentation in every product we create. 
                    We believe that excellence is achieved through a combination of passion, precision, and innovation.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center min-h-screen p-8 mb-[-400px]">
        <div class="grid grid-cols-6 grid-rows-4 gap-4 max-w-5xl w-full h-[700px]">
            <!-- Large vertical image (left) -->
            <div class="col-start-1 col-span-2 row-start-1 row-span-2 items-center justify-center">
            <img src="" alt="Image 1"
                class="w-50 h-65 object-cover rounded-4xl shadow-md ml-16" />
            </div>

            <!-- Wide image (top-center) -->
            <div class="col-span-2 row-span-2">
            <img src="https://source.unsplash.com/random/700x400?sig=2" alt="Image 2"
                class="w-70 h-45 object-cover rounded-4xl shadow-md ml-8" />
            </div>

            <!-- Large vertical image (far right) -->
            <div class="col-span-2 row-span-3">
            <img src="https://source.unsplash.com/random/300x800?sig=3" alt="Image 3"
                class="w-65 h-100 object-cover rounded-4xl shadow-md mr-4" />
            </div>

            <!-- Small square image (bottom-left) -->
            <div class="col-start-1 col-span-2 row-start-3 row-span-1 flex items-center justify-center">
            <img src="https://source.unsplash.com/random/400x400?sig=4" alt="Image 4"
                class="w-50 h-30 object-cover rounded-2xl shadow-md mb-50" />
            </div>

            <!-- Tiny horizontal image (bottom-center-left) -->
            <div class="col-start-3 col-span-1 row-start-3 row-span-1 flex items-center justify-center">
            <img src="https://source.unsplash.com/random/500x300?sig=5" alt="Image 5"
                class="w-50 h-35 object-cover rounded-2xl shadow-md mb-50 mr-2  " />
            </div>

            <!-- Small square image (bottom-center-right) -->
            <div class="col-start-3 col-span-2 row-start-3 row-span-1 flex items-center justify-center">
            <img src="https://source.unsplash.com/random/300x300?sig=6" alt="Image 6"
                class="w-50 h-30 object-cover rounded-2xl shadow-md mb-80 ml-24" />
            </div>
        </div>
  </div>
</section>
@endsection