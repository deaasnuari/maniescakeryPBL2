<!-- 
    Modal Ulasan 
    Nama : Fatra Syahreza
    NIM  : 3312411031
    Kelas: IF 2A Malam
-->

<!-- 
    Produk Page
    Nama : Christian Marcelino
    NIM  : 3312411008
    Kelas: IF 2A Malam
-->

@extends('layouts.app')
@section('title', 'Manies Cakery - Catalog')
@section('content')

<div class="mx-10 py-8 min-h-screen">
    <div class="flex justify-between">
        <div class="flex items-center justify-start -mb-px">
            <span class="inline-block w-16 h-px bg-amber-950 mr-3"></span>
            <h3 class="uppercase tracking-widest text-amber-950 -mb-px font-bold">our products</h3>
        </div>
        {{-- role togle --}}
        <div>
            <label class="inline-flex items-center cursor-pointer">
                <span class="me-3 text-sm font-medium text-gray-900 ">Customer</span>
                <input type="checkbox" value="" id="roleToggle" class="sr-only peer">
                    <div class="relative w-11 h-6 bg-gray-200 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600 dark:peer-checked:bg-blue-600"></div>
                <span class="ms-3 text-sm font-medium text-gray-900">Admin</span>
            </label>
        </div>
    </div>
    <br>
    <div class="flex justify-between gap-2 flex-wrap">
        @foreach ($kategori as $k)
            <a href="{{ url('/produk/kategori/' . $k->id) }}">
                <div class="py-3 w-50 text-center uppercase rounded-md shadow-md inset-shadow-md font-bold tracking-widest cursor-pointer 
                {{ (isset($kategoriAktif) && $kategoriAktif == $k->id) ? 'bg-accent text-white' : 'bg-white text-accent' }}">{{ $k->kategori }}
                </div>
            </a>
        @endforeach
    </div>


    <br>
    <div>
        <br>
        <hr>
        <br>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-15">
            @foreach ($produk as $produk)     
                @include('components.catalogcard')
                @include('components.review_modal')
            @endforeach
            <div id="admin-only" data-modal-target="new-catalog" data-modal-toggle="new-catalog" class="hidden border border-gray-500 rounded overflow-hidden justify-center items-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"stroke-linejoin="round" class="feather feather-plus-square size-20 stroke-gray-500"><rect x="3" y="3" width="18"height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8"y1="12" x2="16" y2="12"></line></svg> 
            </div>
    </div>
</div>

<div id="new-catalog" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm">
                <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900">
                    Tambah Catalog
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="border rounded overflow-hidden overflow-y-auto max-h-64">
                    <table class="table-auto w-full text-sm text-left text-gray-500">
                        <thead class="bg-gray-200 sticky top-0 z-10">
                            <tr class="h-10">
                                <th class="px-4 py-2">Produk ID</th>
                                <th class="px-4 py-2">Nama Produk</th>
                                <th class="px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i = 0; $i < 20; $i++)
                            <tr class="border-t">
                                <td class="px-4 py-2">1</td>
                                <td class="px-4 py-2">Brownies</td>
                                <td class="px-4 py-2">
                                    <a href="#" 
                                    onclick="toggleStatus(this)" 
                                    class="status-link text-green-600 cursor-pointer">
                                    Tersedia
                                    </a>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                <button data-modal-hide="new-catalog" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">kembali</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Overlay -->
<div id="openReview" class="fixed inset-0 backdrop-blur-sm hidden opacity-0 items-center justify-center z-50 transition-opacity duration-300">
    <!-- Modal Content -->
    <div id="modal-content" class="bg-white max-w-5xl w-full rounded-lg p-6 relative transform scale-95 opacity-0 transition-all duration-300">
        <button id="close-modal" class="absolute top-3 right-4 text-gray-500 hover:text-gray-700 text-xl">&times;</button>

        <h2 class="text-xl font-semibold mb-4">Ulasan Produk</h2>

        <!-- Rata-rata rating -->
        <div class="text-center mb-6">
            <p class="text-2xl font-bold" id="average-rating">0</p>
            <p class="text-sm text-gray-500">dari 5</p>
            <div id="stars-average" class="text-yellow-400 text-xl mt-1">☆☆☆☆☆</div>
        </div>

        <!-- Container untuk Review Ulasan -->
        <div class="mb-6 p-4 bg-gray-50 rounded-lg border border-gray-200 max-h-64 overflow-y-auto">
            <h3 class="font-semibold mb-2">Review Ulasan</h3>
            <div id="review-list" class="space-y-4">
                <!-- Review akan ditampilkan di sini -->
            </div>
        </div>

        <!-- Container untuk Form Ulasan -->
        <div class="p-4 bg-white rounded-lg border border-gray-200">
            <h3 class="font-semibold mb-2">Tulis Ulasan Anda</h3>
            <form id="review-form" class="space-y-4">
                <textarea id="review" placeholder="Tulis ulasan Anda..." class="w-full border border-gray-300 rounded px-4 py-2" required></textarea>
                <select id="rating" class="w-full border border-gray-300 rounded px-4 py-2" required>
                    <option value="" disabled selected>Pilih rating</option>
                    <option value="1">1 - Buruk</option>
                    <option value="2">2 - Kurang</option>
                    <option value="3">3 - Cukup</option>
                    <option value="4">4 - Baik</option>
                    <option value="5">5 - Sangat Baik</option>
                </select>
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Kirim Ulasan</button>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function toggleStatus(element) {
            const isAvailable = element.textContent.trim().toLowerCase() === 'tersedia';

            if (isAvailable) {
                element.textContent = 'Tidak Tersedia';
                element.classList.remove('text-green-600');
                element.classList.add('text-red-600');
            } else {
                element.textContent = 'Tersedia';
                element.classList.remove('text-red-600');
                element.classList.add('text-green-600');
            }
        }
        
    const overlay      = document.getElementById('openReview');
    const modalContent = document.getElementById('modal-content');
    const openBtn      = document.getElementById('openModal');
    const closeBtn     = document.getElementById('close-modal');

    // Buka modal
    openBtn.addEventListener('click', () => {
        overlay.classList.remove('hidden');
        overlay.classList.add('flex');
        setTimeout(() => {
            overlay.classList.add('opacity-100');
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        }, 10);
    });

    // Tutup modal
    function closeModal() {
        overlay.classList.remove('opacity-100');
        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            overlay.classList.add('hidden');
            overlay.classList.remove('flex');
        }, 300);
    }
    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', e => {
        if (e.target === overlay) closeModal();
    });

    // Ulasan logic
    const form       = document.getElementById('review-form');
    const reviewList = document.getElementById('review-list');
    const avgText    = document.getElementById('average-rating');
    const starsAvg   = document.getElementById('stars-average');
    const reviews    = [];

    form.addEventListener('submit', e => {
        e.preventDefault();
        const review = document.getElementById('review').value;
        const rating = parseInt(document.getElementById('rating').value);
        reviews.push({ name: 'User', review, rating });
        renderReviews();
        updateAverage();
        form.reset();
    });

    function renderReviews() {
        reviewList.innerHTML = '';
        reviews.forEach(r => {
            const div = document.createElement('div');
            div.className = 'border border-gray-200 rounded p-4';
            div.innerHTML = `
                <div class="flex items-center mb-2">
                    <div class="bg-yellow-100 text-yellow-800 font-bold w-8 h-8 flex items-center justify-center rounded-full mr-2">
                        ${r.name.charAt(0).toUpperCase()}
                    </div>
                    <div>
                        <p class="font-semibold">${r.name}</p>
                        <div class="text-yellow-400">${'★'.repeat(r.rating)}${'☆'.repeat(5 - r.rating)}</div>
                    </div>
                </div>
                <p class="text-sm text-gray-700">${r.review}</p>
            `;
            reviewList.appendChild(div);
        });
    }

    function updateAverage() {
        if (!reviews.length) {
            avgText.textContent = '0';
            starsAvg.textContent = '☆☆☆☆☆';
            return;
        }
        const sum = reviews.reduce((a, c) => a + c.rating, 0);
        const avg = (sum / reviews.length).toFixed(1);
        avgText.textContent = avg;
        starsAvg.textContent = '★'.repeat(Math.round(avg)) + '☆'.repeat(5 - Math.round(avg));
    }

    document.addEventListener('DOMContentLoaded', () => {
    const roleToggle = document.getElementById('roleToggle');
    const adminContent = document.getElementById('admin-only');

    roleToggle.addEventListener('change', () => {
        if (roleToggle.checked) {
            // Admin aktif
            adminContent.classList.remove('hidden');
            adminContent.classList.add('flex');
            console.log('Role: admin');
        } else {
            // Customer aktif
            adminContent.classList.add('hidden');
            console.log('Role: costumer');
        }
    });
});
    </script>
@endpush

@endsection