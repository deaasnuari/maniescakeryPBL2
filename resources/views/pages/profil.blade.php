@extends('layouts.app')
@section('title', 'profil')
@section('content')

{{-- CONTENT --}}
<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-xl flex flex-col items-center">
  <div class="w-full max-w-md flex flex-col items-center">
    <h2 class="text-2xl font-bold text-center mb-8">Profile</h2>
    <div class="w-40 h-40 bg-gray-200 rounded-lg overflow-hidden flex items-center justify-center mb-8">
      <img src="" alt="Profile Picture" class="object-cover w-full h-full">
    </div>
    <div class="w-full space-y-4">
      <div class="flex">
        <div class="w-40 text-gray-600">Nama</div>
        <div class="font-semibold text-gray-900">UDIN</div>
      </div>
      <div class="flex">
        <div class="w-40 text-gray-600">Email</div>
        <div class="font-semibold text-gray-900">UDIN@udin.com</div>
      </div>
      <div class="flex">
        <div class="w-40 text-gray-600">No Handphone</div>
        <div class="font-semibold text-gray-900">0811223344</div>
      </div>
      <div class="flex">
        <div class="w-40 text-gray-600">Password</div>
        <div class="font-semibold text-gray-900">*********</div>
      </div>
    </div>
    <div class="mt-10 flex justify-center gap-4">
      <button data-modal-toggle="crud-modal" data-modal-target="crud-modal" class=" bg-[#4E433F] text-white px-6 py-2 rounded-lg hover:bg-[#3e3532] text-sm">Edit Akun</button>
      
    </div>
    
  </div>
</div>
{{-- END CONTENT --}}

<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
    <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  Create New Product
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <form class="p-4 md:p-5">
              <div class="grid gap-4 mb-4 grid-cols-2">
                  <div class="col-span-2">
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                      <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Produk" required="">
                  </div>
                  <div class="col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Produk" required="">
                </div>
                  <div>                     
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                      <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Upload Gambar sesuai Ukuran (MAX. 800x400px).</p>
                  </div>
                  <div></div>
                  

              </div>
              <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                  Tambahkan Produk
              </button>
          </form>
      </div>
  </div>
</div> 




@endsection