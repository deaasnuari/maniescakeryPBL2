<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
})->name('dashboard');

Route::get('/productsdashboard', function () {
    return view('pages.dashboard.products');
})->name('productsdashboard');

Route::get('/usersdashboard', function () {
    return view('pages.dashboard.users');
})->name('usersdashboard');

//route untuk login
Route::get('/login', function () {
    return view('pages.login');
})->name('login');

//route untuk register
Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('pages/landingadmin', function () {
    return view('pages/landingadmin');
});

Route::get('pages/profil', function () {
    return view('pages/profil');
});

Route::get('/dashboard/users', function () {
    return view('pages.dashboard.users'); // sesuai dengan nama file kamu
});


// Route ke product dashboard 
Route::get('/productsdashboard', function () {
    // Data contoh untuk ditampilkan di dashboard
    $products = [
        [
            'nama_produk' => 'Jhon doe',
            'desc' => 'jhon.doe@gmail.com',
            'gambar' => '0844656677',
            'kategori' => 'Jhon756'
        ],
        [
            'nama_produk' => 'Jhon doe',
            'desc' => 'jhon.doe@gmail.com',
            'gambar' => '0844656677',
            'kategori' => 'Jhon756'
        ],
        [
            'nama_produk' => 'Jhon doe',
            'desc' => 'jhon.doe@gmail.com',
            'gambar' => '0844656677',
            'kategori' => 'Jhon756'
        ],
        [
            'nama_produk' => 'Jhon doe',
            'desc' => 'jhon.doe@gmail.com',
            'gambar' => '0844656677',
            'kategori' => 'Jhon756'
        ],
        [
            'nama_produk' => 'Jhon doe',
            'desc' => 'jhon.doe@gmail.com',
            'gambar' => '0844656677',
            'kategori' => 'Jhon756'
        ],
    ];
    
    // Perhatikan path view yang sesuai dengan struktur direktori Anda
    return view('pages.dashboard.products', compact('products'));
})->name('productsdashboard');

Route::get('/catalog', function () {
    return view('catalog'); // atau controller kamu
})->name('catalog');

