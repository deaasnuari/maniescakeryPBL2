<div 
    class="relative border border-gray-500 rounded overflow-hidden cursor-pointer transition-all duration-200 card-container {{ $produk->status ? '' : 'opacity-50' }}"
    onclick="handleCardClick(this)"
>
    <!-- Checkbox tersembunyi -->
    <input type="checkbox" name="selected_products[]" value="{{ $produk->id }}" class="hidden card-checkbox">

    <!-- Link ke detail produk -->
    <a href="{{ route('produk.detail', $produk->id) }}" class="block card-link w-full h-fit">
        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="object-cover w-full h-55">
        <div class="h-12 text-center flex items-center justify-center font-bold bg-white text-secondary">
            {{ $produk->nama }}
        </div>
    </a>

    <!-- Indikator Nonaktif -->
    @if (!$produk->status)
        <div class="absolute top-0 left-0 bg-red-600 text-white text-xs font-semibold px-2 py-1 rounded-br">
            Nonaktif
        </div>
    @endif

    <!-- Overlay saat dipilih -->
    <div class="absolute inset-0 bg-blue-500/20 hidden selected-overlay rounded-lg ring-2 ring-blue-600"></div>

    <!-- Centang di pojok kanan atas -->
    <div class="absolute top-2 right-2 hidden selected-check">
        <div class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
            </svg>
        </div>
    </div>
</div>
