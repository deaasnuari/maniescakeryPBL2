@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 text-center">
    <button id="openModal" class="bg-yellow-500 text-white px-6 py-2 rounded hover:bg-yellow-600">
        Ulasan
    </button>
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

        <!-- Container untuk Daftar Ulasan -->
        <div class="mb-6 p-4 bg-gray-50 rounded-lg border border-gray-200 max-h-64 overflow-y-auto">
            <h3 class="font-semibold mb-2">Daftar Ulasan</h3>
            <div id="review-list" class="space-y-4">
                <!-- Review akan dirender di sini -->
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
@endsection

@push('scripts')
<script>
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
</script>
@endpush
