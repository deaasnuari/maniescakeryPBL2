<div class="flex justify-between flex-wrap gap-2">
    @foreach ($kategori as $k)
        <div 
            wire:click="setKategoriAktif({{ $k->id }})"
            class="py-3 px-4 w-50 text-center uppercase rounded-md shadow-md font-bold tracking-widest cursor-pointer
                {{ $kategoriAktif === $k->id ? 'bg-accent text-white' : 'bg-white text-accent' }}">
            {{ $k->kategori }}
        </div>
    @endforeach
</div>

