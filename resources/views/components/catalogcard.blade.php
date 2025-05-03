<div class="flex flex-col border border-gray-500 rounded overflow-hidden">
  <a href="{{ route('produkdetail') }}" class="w-fit h-fit">
      <img src="../../assets/CustomMatcha.jpg" alt="Custom Matcha" class="object-cover w-60 h-55"/>
      <div class="h-12 text-center flex items-center justify-center font-bold bg-white text-secondary">Brownies coklat</div>
  </a>
  <button type="submit" class="px-2 h-8 flex items-center justify-between bg-secondary text-white cursor-pointer" id="openModal">
      <div class="flex gap-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
            </svg>
      </div>
      <div>ulasan ></div>
  </button>


  @push('scripts')
  <script>
    const overlay      = document.getElementById('openReview');
    const modalContent = document.getElementById('modal-content');
    const openBtn      = document.getElementById('openModal');
    const closeBtn     = document.getElementById('close-modal');
    
    // Buka modal
    openBtn.addEventListener('click', () => {
      console.log('Modal opened');
      
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
</div>

