@extends('layouts.app')
@section('title', 'detail product')
@section('content')

    <div class="flex w-full gap-5">
        <div class="w-100 rounded-xl overflow-hidden h-50 shadow-md border">
            <img src="{{ asset('assets/CustomMatcha.jpg') }}" alt="Custom Matcha" class="object-cover w-full h-full">
        </div>
        <div>
            <p class="text-2xl font-bold capitalize">fudgy brownies nubery</p>
            <p>Brownies Panggang Fudgy Mix Topping dengan Nutella dan Strawberry, add on Almond, chochochip, chochoball, lotus, biskuit, glaze coklat, other </p>
            <br><br>
            <div class="flex gap-8 w-fit">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram size-10"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                </a>
                <a href="">
                    <svg width="24" height="24" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg" class="size-10">
                        <path d="M35.4167 6.06261C33.5064 4.13367 31.2313 2.60421 28.724 1.56337C26.2167 0.522526 23.5273 -0.0088816 20.8125 0.000112282C9.4375 0.000112282 0.166667 9.27095 0.166667 20.6459C0.166667 24.2918 1.125 27.8334 2.91667 30.9584L0 41.6668L10.9375 38.7918C13.9583 40.4376 17.3542 41.3126 20.8125 41.3126C32.1875 41.3126 41.4583 32.0418 41.4583 20.6668C41.4583 15.1459 39.3125 9.95844 35.4167 6.06261ZM20.8125 37.8126C17.7292 37.8126 14.7083 36.9793 12.0625 35.4168L11.4375 35.0418L4.9375 36.7501L6.66667 30.4168L6.25 29.7709C4.53656 27.0356 3.62693 23.8736 3.625 20.6459C3.625 11.1876 11.3333 3.47928 20.7917 3.47928C25.375 3.47928 29.6875 5.27095 32.9167 8.52095C34.5159 10.1123 35.7832 12.0054 36.6451 14.0904C37.5069 16.1754 37.9463 18.4107 37.9375 20.6668C37.9792 30.1251 30.2708 37.8126 20.8125 37.8126ZM30.2292 24.9793C29.7083 24.7293 27.1667 23.4793 26.7083 23.2918C26.2292 23.1251 25.8958 23.0418 25.5417 23.5418C25.1875 24.0626 24.2083 25.2293 23.9167 25.5626C23.625 25.9168 23.3125 25.9584 22.7917 25.6876C22.2708 25.4376 20.6042 24.8751 18.6458 23.1251C17.1042 21.7501 16.0833 20.0626 15.7708 19.5418C15.4792 19.0209 15.7292 18.7501 16 18.4793C16.2292 18.2501 16.5208 17.8751 16.7708 17.5834C17.0208 17.2918 17.125 17.0626 17.2917 16.7293C17.4583 16.3751 17.375 16.0834 17.25 15.8334C17.125 15.5834 16.0833 13.0418 15.6667 12.0001C15.25 11.0001 14.8125 11.1251 14.5 11.1043H13.5C13.1458 11.1043 12.6042 11.2293 12.125 11.7501C11.6667 12.2709 10.3333 13.5209 10.3333 16.0626C10.3333 18.6043 12.1875 21.0626 12.4375 21.3959C12.6875 21.7501 16.0833 26.9584 21.25 29.1876C22.4792 29.7293 23.4375 30.0418 24.1875 30.2709C25.4167 30.6668 26.5417 30.6043 27.4375 30.4793C28.4375 30.3334 30.5 29.2293 30.9167 28.0209C31.3542 26.8126 31.3542 25.7918 31.2083 25.5626C31.0625 25.3334 30.75 25.2293 30.2292 24.9793Z" fill="black"/>
                        </svg>
                </a>
                <a href="" class="bg-[#493C32] text-accent py-2 px-8 rounded-md font-bold tracking-widest cursor-pointer capitalize">
                    pesan sekarang
                </a>
            </div>
        </div>
    </div>
    <br>
    <hr class="border-2 border-[#493C32]">

</section>
@endsection