<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
    @foreach ($products as $produk)
        @include('components.catalogcard')
        @include('components.review_modal')
    @endforeach

    <div id="admin-only" data-modal-target="new-catalog" data-modal-toggle="new-catalog"
        class="hidden border border-gray-500 rounded overflow-hidden justify-center items-center cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-plus-square size-20 stroke-gray-500">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
            <line x1="12" y1="8" x2="12" y2="16" />
            <line x1="8" y1="12" x2="16" y2="12" />
        </svg>
    </div>
</div>

