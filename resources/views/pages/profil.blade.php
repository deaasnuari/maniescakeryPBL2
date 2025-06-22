@extends('layouts.app')
@section('title', 'Manies Cakery - Profil')
@section('content')

{{-- CONTENT --}}
<div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-xl flex flex-col items-center">
  <div class="w-full max-w-md flex flex-col items-center">
    <h2 class="text-2xl font-bold text-center mb-8">Profile</h2>
   
    <div class="w-40 h-40 bg-gray-200 rounded-lg overflow-hidden flex items-center justify-center mb-8">
      <img src="{{ $user->gambar ? asset('storage/' . $user->gambar) : asset('path/to/default/image.jpg') }}" alt="Profile Picture" class="object-cover w-full h-full">
    </div>
    
    <div class="w-full space-y-4">
      <div class="flex">
        <div class="w-40 text-gray-600">Username</div>
        <div class="font-semibold text-gray-900">{{ $user->username }}</div>
      </div>
      <div class="flex">
        <div class="w-40 text-gray-600">Email</div>
        <div class="font-semibold text-gray-900">{{ $user->email }}</div>
      </div>
      <div class="flex">
        <div class="w-40 text-gray-600">Telepon</div>
        <div class="font-semibold text-gray-900">{{ $user->telepon }}</div>
      </div>
      <div class="flex">
        <div class="w-40 text-gray-600">Password</div>
        <div class="font-semibold text-gray-900">*********</div>
      </div>
    </div>
    <div class="mt-10 flex justify-center gap-4">
      <button data-modal-toggle="crud-modal" data-modal-target="crud-modal" class="bg-[#4E433F] text-white px-6 py-2 rounded-lg hover:bg-[#3e3532] text-sm">Edit Akun</button>
    </div>
  </div>
</div>
{{-- END CONTENT --}}

<!-- Modal content here -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-black/50">
  <div class="relative p-4 w-full max-w-md max-h-full">
    <div class="relative bg-white rounded-lg shadow-lg">
      <!-- Modal header -->
      <div class="flex items-center justify-between p-4 border-b rounded-t">
        <h3 class="text-lg font-semibold text-gray-900">Edit Profile</h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center" data-modal-hide="crud-modal">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <form method="POST" action="{{ route('profile.update') }}" class="p-4 md:p-5" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-4 mb-4 grid-cols-2">
          <div class="col-span-2">
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
            <input type="text" name="username" id="username" value="{{ $user->username }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
          </div>
          <div class="col-span-2">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
          </div>
          <div class="col-span-2">
            <label for="telepon" class="block mb-2 text-sm font-medium text-gray-900">Telepon</label>
            <input type="text" name="telepon" id="telepon" value="{{ $user->telepon }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
          </div>
          <div class="col-span-2">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
            <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Leave blank to keep current password">
            <input type="checkbox" id="show-password" class="mt-2" onclick="togglePasswordVisibility()"> Show Password
          </div>
          <div class="col-span-2">
            <label for="file_input" class="block mb-2 text-sm font-medium text-gray-900">Upload Gambar</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" aria-describedby="file_input_help" id="file_input" name="gambar" type="file">
            <p class="mt-1 text-sm text-gray-500" id="file_input_help">Upload Gambar sesuai Ukuran (MAX. 800x400px).</p>
          </div>
        </div>
        <div class="flex justify-end gap-2">
          <button type="button" data-modal-hide="crud-modal" class="px-4 py-2 text-sm text-gray-600 bg-gray-100 rounded hover:bg-gray-200">Cancel</button>
          <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var showPasswordCheckbox = document.getElementById("show-password");
    if (showPasswordCheckbox.checked) {
        passwordInput.type = "text"; // Tampilkan password
    } else {
        passwordInput.type = "password"; // Sembunyikan password
    }
}
</script>

@endsection