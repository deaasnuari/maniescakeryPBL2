<!-- 
    Nama  : Fatra Syahreza
    NIM   : 3312411031
    Kelas : IF 2A Malam
-->

@extends('layouts.app')
@section('title', 'Manies Cakery - About Us')
@section('content')

    <!-- Main Section -->
    <div class="max-w-5xl mx-auto px-6 md:px-12 py-8 space-y-16">
        <div class="max-w-5xl mx-auto px-6 md:px-12 py-8 space-y-16">
            <!-- About Us -->
            <div>
                <div class="flex items-center mb-4">
                    <span class="inline-block w-16 h-px bg-amber-950 mr-3"></span>
                    <h3 class="text-xs font-semibold uppercase tracking-widest text-amber-950">About Us</h3>
                </div>

                <div class="flex flex-col md:flex-row md:items-center md:gap-x-12 gap-y-8">
                    {{-- Kiri --}}
                    <div class="md:w-1/2">
                        <p class="text-2xl font-semibold leading-snug">
                            {!! $about->section_left ?? '<span class="text-gray-400 italic">[Konten kosong]</span>' !!}
                        </p>
                    </div>

                    {{-- Kanan --}}
                    <div class="md:w-1/2">
                        <p class="text-l leading-relaxed">
                            {!! $about->section_right ?? '<span class="text-gray-400 italic">[Konten kosong]</span>' !!}
                        </p>
                    </div>
                </div>

                <div class="mt-4 text-right">
                    <button onclick="toggleModal('aboutModal')" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm">
                        Edit
                    </button>
                </div>
            </div>

            <!-- Our Philosophy -->
            <div>
                <div class="flex items-center mb-4">
                    <span class="inline-block w-16 h-px bg-amber-950 mr-3"></span>
                    <h3 class="text-xs font-semibold uppercase tracking-widest text-amber-950">Our Philosophy</h3>
                </div>

                <div class="flex flex-col md:flex-row md:items-center md:gap-x-12 gap-y-8">
                    {{-- Left --}}
                    <div class="md:w-1/2">
                        <p class="text-3xl font-semibold leading-snug">
                            {!! $about->philosophy_left ?? '<span class="text-gray-400 italic">[Konten kosong]</span>' !!}
                        </p>
                    </div>

                    {{-- Right --}}
                    <div class="md:w-1/2">
                        <p class="text-base leading-relaxed">
                            {!! $about->philosophy_right ?? '<span class="text-gray-400 italic">[Konten kosong]</span>' !!}
                        </p>
                    </div>
                </div>

                <div class="mt-4 text-right">
                    <button onclick="toggleModal('philosophyModal')" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm">
                        Edit
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal: About Us -->
        <div id="aboutModal" class="fixed inset-0 bg-white/30 backdrop-blur-sm z-50 hidden flex items-center justify-center" onclick="closeModalOnClickOutside(event, 'aboutModal')">
            <div class="bg-white w-full max-w-2xl p-6 rounded-lg shadow-lg" onclick="event.stopPropagation()">
                <h2 class="text-lg font-bold mb-4">Edit About Us</h2>
                <form action="{{ route('about.update.about', $about->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1">Section Kiri</label>
                        <textarea name="section_left" rows="4" class="w-full border rounded px-3 py-2">{{ old('section_left', $about->section_left) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1">Section Kanan</label>
                        <textarea name="section_right" rows="4" class="w-full border rounded px-3 py-2">{{ old('section_right', $about->section_right) }}</textarea>
                    </div>

                    <div class="flex justify-end space-x-2">
                        <button type="button" onclick="toggleModal('aboutModal')" class="bg-gray-300 hover:bg-gray-400 px-4 py-2 rounded text-sm">Batal</button>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal: Our Philosophy -->
        <div id="philosophyModal" class="fixed inset-0 bg-white/30 backdrop-blur-sm z-50 hidden flex items-center justify-center" onclick="closeModalOnClickOutside(event, 'philosophyModal')">
            <div class="bg-white w-full max-w-2xl p-6 rounded-lg shadow-lg" onclick="event.stopPropagation()">
                <h2 class="text-lg font-bold mb-4">Edit Our Philosophy</h2>
                <form action="{{ route('about.update.philosophy', $about->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1">Philosophy Kiri</label>
                        <textarea name="philosophy_left" rows="4" class="w-full border rounded px-3 py-2">{{ old('philosophy_left', $about->philosophy_left) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1">Philosophy Kanan</label>
                        <textarea name="philosophy_right" rows="4" class="w-full border rounded px-3 py-2">{{ old('philosophy_right', $about->philosophy_right) }}</textarea>
                    </div>

                    <div class="flex justify-end space-x-2">
                        <button type="button" onclick="toggleModal('philosophyModal')" class="bg-gray-300 hover:bg-gray-400 px-4 py-2 rounded text-sm">Batal</button>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    
        <!-- Image Gallery -->
        <div class="flex justify-center min-h-screen p-8 mb-[-500px]">
            <div class="grid grid-cols-6 grid-rows-4 gap-4 max-w-5xl w-full h-[700px]">
            
                <div class="col-start-1 col-span-2 row-start-1 row-span-2 items-center justify-center">
                <img src="{{ asset('storage/' . $about->image_1) }}" alt="Image 1"
                    class="w-50 h-65 object-cover rounded-4xl shadow-md ml-16" />
                </div>

                <div class="col-span-2 row-span-2">
                <img src="{{ asset('storage/' . $about->image_2) }}" alt="Image 2"
                    class="w-80 h-45 object-cover rounded-4xl shadow-md ml-4" />
                </div>

                <div class="col-span-2 row-span-2">
                <img src="{{ asset('storage/' . $about->image_3) }}" alt="image 3"
                    class="w-75 h-100 object-cover rounded-4xl shadow-md mr-4" />
                </div>

                <div class="col-start-1 col-span-2 row-start-3 row-span-1 flex items-center justify-center">
                <img src="{{ asset('storage/' . $about->image_4) }}" alt="Image 4"
                    class="w-70 h-35 object-cover rounded-2xl shadow-md mb-50" />
                </div>

                <div class="col-start-3 col-span-1 row-start-3 row-span-1 flex items-center justify-center">
                <img src="{{ asset('storage/' . $about->image_5) }}" alt="Image 5"
                    class="w-60 h-40 object-cover rounded-2xl shadow-md mb-55 mr-2  " />
                </div>

                <div class="col-start-3 col-span-2 row-start-3 row-span-1 flex items-center justify-center">
                <img src="{{ asset('storage/' . $about->image_6) }}" alt="Image 6"
                    class="w-40 h-40 object-cover rounded-2xl shadow-md mb-80 ml-42" />
                </div>
            </div>
        </div>
        <div class="-mt-px text-right">
            <button onclick="toggleModal('imageModal')" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm">
                Edit Gambar
            </button>
            </div>

        <!-- Modal Image -->
        <!-- Modal: Edit Gambar -->
        <div id="imageModal" class="fixed inset-0 bg-white/30 backdrop-blur-sm z-50 hidden flex items-center justify-center" onclick="closeModalOnClickOutside(event, 'imageModal')">
            <div class="bg-white w-full max-w-2xl p-6 rounded-lg shadow-lg" onclick="event.stopPropagation()">
                <h2 class="text-lg font-bold mb-4">Edit Gambar</h2>
                <form action="{{ route('about.update.images', $about->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @for($i = 1; $i <= 6; $i++)
                        <div class="mb-4">
                            <label class="block text-sm font-medium mb-1">Gambar {{ $i }}</label>
                            <input type="file" name="image_{{ $i }}" class="w-full border rounded px-3 py-2">
                            @if(!empty($about->{'image_'.$i}))
                                <img src="{{ asset('storage/' . $about->{'image_'.$i}) }}" alt="Gambar {{ $i }}" class="w-24 mt-2 rounded shadow">
                            @endif
                        </div>
                    @endfor

                    <div class="flex justify-end space-x-2">
                        <button type="button" onclick="toggleModal('imageModal')" class="bg-gray-300 hover:bg-gray-400 px-4 py-2 rounded text-sm">Batal</button>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

<script>
function toggleModal(id) {
    const modal = document.getElementById(id);
    modal.classList.toggle('hidden');
}

function closeModalOnClickOutside(event, modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.add('hidden');
}
</script>
