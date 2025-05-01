@extends('layouts.dashboard')
@section('title', 'Ulasan Produk')
@section('content')

<div x-data="commentSection()" class="max-w-xl mx-auto p-6">
    <!-- Produk -->
    <h1 class="text-2xl font-bold mb-4">Chocolate Cake</h1>

    <!-- Tombol buka modal -->
    <button @click="openModal = true"
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Beri Rating & Komentar
    </button>

    <!-- Modal -->
    <div x-show="openModal"
         x-transition
         class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div @click.away="openModal = false"
             class="bg-white p-6 rounded shadow-lg w-full max-w-md">
            <h2 class="text-xl font-bold mb-4">Tulis Komentar</h2>

            <!-- Form -->
            <div class="space-y-4">
                <!-- Rating -->
                <div>
                    <label class="font-semibold">Rating:</label>
                    <div class="flex gap-1 mt-1">
                        <template x-for="i in 5">
                            <button type="button"
                                    @click="rating = i"
                                    :class="rating >= i ? 'text-yellow-400' : 'text-gray-300'"
                                    class="text-2xl focus:outline-none">★</button>
                        </template>
                    </div>
                </div>

                <!-- Komentar -->
                <div>
                    <label class="font-semibold">Komentar:</label>
                    <textarea x-model="newComment" rows="3"
                              class="w-full border rounded p-2 mt-1"
                              placeholder="Tulis komentar..."></textarea>
                </div>

                <!-- Tombol Kirim -->
                <div class="flex justify-end gap-2">
                    <button @click="openModal = false" class="text-gray-600">Batal</button>
                    <button @click="submitComment()"
                            class="bg-blue-600 text-white px-4 py-1 rounded">
                        Kirim
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Komentar -->
    <div class="mt-6">
        <h3 class="text-lg font-bold mb-2">Ulasan:</h3>
        <template x-for="(comment, index) in comments" :key="index">
            <div class="border-b py-3">
                <div class="flex items-center gap-2 text-yellow-500">
                    <template x-for="i in comment.rating">
                        <span>★</span>
                    </template>
                    <template x-for="i in 5 - comment.rating">
                        <span class="text-gray-300">★</span>
                    </template>
                </div>
                <p class="text-gray-700 text-sm mt-1" x-text="comment.text"></p>
            </div>
        </template>
    </div>
</div>

<!-- Alpine JS Component -->
<script>
    function commentSection() {
        return {
            openModal: false,
            rating: 0,
            newComment: '',
            comments: [
                { rating: 5, text: 'Cake-nya super enak dan moist banget!' },
                { rating: 4, text: 'Rasa oke, cuma manisnya agak berlebihan.' },
            ],
            submitComment() {
                if (this.rating === 0 || this.newComment.trim() === '') {
                    alert('Harap isi rating dan komentar!');
                    return;
                }

                this.comments.unshift({
                    rating: this.rating,
                    text: this.newComment,
                });

                this.rating = 0;
                this.newComment = '';
                this.openModal = false;
            }
        }
    }
</script>

@endsection