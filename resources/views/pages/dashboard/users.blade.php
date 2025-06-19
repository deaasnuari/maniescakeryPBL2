<!-- nama: dea asnuari
nim: 3312411001 -->

@extends('layouts.dashboard')
@section('title', 'Users Dashboard')
@section('content')
    <div class="text-center font-bold">Welcome to the Users Dashboard</div>
    <h1 class="text-2xl font-bold mb-6">User Dashboard</h1>

    <div class="mb-4 flex justify-between items-center">
        <form class="w-1/2">   
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search..." required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
        </form>

        <div class="relative">
            <!-- Sort Button -->
            <button id="sortDropdownButton" data-dropdown-toggle="sortDropdown" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-2" type="button">
                SORT BY
                <svg class="w-2.5 h-2.5 ml-2.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown List -->
            <div id="sortDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="sortDropdownButton">
                    <li>
                        <a href="{{ request()->fullUrlWithQuery(['sort' => 'name_asc']) }}" class="block px-4 py-2 hover:bg-gray-100 {{ request('sort') === 'name_asc' ? 'bg-gray-100 font-semibold' : '' }}">
                            Name (A-Z)
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->fullUrlWithQuery(['sort' => 'name_desc']) }}" class="block px-4 py-2 hover:bg-gray-100 {{ request('sort') === 'name_desc' ? 'bg-gray-100 font-semibold' : '' }}">
                            Name (Z-A)
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Telephone</th>
                    <th scope="col" class="px-6 py-3">Username</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 0; $i < 5; $i++)
                    <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">Jhon Doe</th>
                        <td class="px-6 py-4">jhon.doe@gmail.com</td>
                        <td class="px-6 py-4">0844556677</td>
                        <td class="px-6 py-4">Jhon756</td>
                        <td class="px-6 py-4">
                            <!-- Edit Button -->
                            <button data-modal-target="editUserModal" data-modal-toggle="editUserModal" class="px-4 py-2 text-sm font-medium text-blue-600 bg-blue-100 rounded-lg hover:bg-blue-200 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                </svg>
                                Edit
                            </button>

                            <!-- Delete Button -->
                            <button class="px-4 py-2 text-sm font-medium text-red-600 bg-red-100 rounded-lg hover:bg-red-200 focus:ring-4 focus:outline-none focus:ring-red-300">
                                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                </svg>
                                Delete
                            </button>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
