<div id="openReview" class="fixed inset-0 hidden backdrop-blur-sm opacity-0 items-center justify-center z-50 transition-opacity duration-300">
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