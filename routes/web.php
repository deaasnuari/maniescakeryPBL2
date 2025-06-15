<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProdukController;

// Routes LOGIN
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/productsdashboard', function () {
    return view('pages.dashboard.products');
})->name('productsdashboard')->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
// END Routes LOGIN

// Routes Register
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
// END Routes Register

// Routes lupa password

Route::get('/lupapassword', function () {
    return view('pages.lupa_password');
})->name('lupapassword');
// END Routes lupa password



Route::get('/', function () {
    return view('index_new');
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

Route::get(' /landingadmin', function () {
    return view('pages/landing_admin');
});

Route::get('/profil', function () {
    return view('pages/profil');
});

Route::get('about_us', function () {
    return view('pages.about_us');
});

Route::get('about_us_admin', function () {
    return view('pages.about_us_admin');
});

Route::get('ulasanproduk', function () {
    return view('pages.ulasan_produk');
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

Route::get('/about_us', function () {
    return view('pages.about_us');
})->name('about_us');

Route::get('/products', [ProdukController::class, 'show']);
Route::get('/produk/kategori/{id}', [ProdukController::class, 'showByKategori'])->name('catalog');
Route::get('/produk/{id}', [ProdukController::class, 'produkDetail'])->name('produk.detail');

Route::get('produkdetail', function () {
    return view('pages.produk_detail');
})->name('produkdetail');

