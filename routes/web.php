<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;


// Routes LOGIN
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
// END Routes LOGIN

// Routes Register
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
// END Routes Register

// Routes Profil
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
// end Routes Profil

// Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
// Route::get('/catalog/{id}', [CatalogController::class, 'show'])->name('catalog.show');
// Route::get('/productsdashboard', function () {
//     return view('pages.dashboard.products');
// })->name('productsdashboard')->middleware('auth');

Route::get('/products/category={param}', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [ProdukController::class, 'produkDetail'])->name('produk.detail');

Route::get('/dashboard/products', [ProdukDashboardController::class, 'index'])->name('dashboard.product.index');

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    // Product routes
    Route::get('/products', [ProdukDashboardController::class, 'index'])->name('product.index');
    Route::post('/products', [ProdukDashboardController::class, 'store'])->name('product.store');
    Route::get('/products/{product}/edit', [ProdukDashboardController::class, 'edit'])->name('product.edit');
    Route::put('/products/{product}', [ProdukDashboardController::class, 'update'])->name('product.update');
    Route::delete('/products/{product}', [ProdukDashboardController::class, 'destroy'])->name('product.destroy');
});

// Route About Us
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about.index');
Route::get('/about-us/{id}/edit', [AboutUsController::class, 'edit'])->name('about.edit');
Route::put('/about-us/{id}/update/about', [AboutUsController::class, 'updateAbout'])->name('about.update.about');
Route::put('/about-us/{id}/update/philosophy', [AboutUsController::class, 'updatePhilosophy'])->name('about.update.philosophy');
Route::put('/about-us/{id}/update/images', [AboutUsController::class, 'updateImages'])->name('about.update.images');
Route::delete('/about-us/{id}/delete/{section}', [AboutUsController::class, 'destroyText'])->name('about.destroyText');


Route::get('/usersdashboard', [UserController::class, 'index']);
Route::get('/usersdashboard', [UserController::class, 'index'])->name('usersdashboard');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::resource('users', UserController::class);

Route::post('/logout', function () {
    Auth::logout();
        return redirect('/login');
    })->name('logout');

// Routes lupa password
Route::get('/lupapassword', function () {
    return view('pages.lupa_password');
})->name('lupapassword');
// END Routes lupa password


// Routes Profil
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
// end Routes Profil



// routes login sebagai guest
Route::post('/login/guest', [LoginController::class, 'guestLogin'])->name('login.guest');

// Logout sebagai guest
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// end routes login sebagai guest


// Routes Gambar Slider
Route::get('/', function () {
    $sliders = Slider::orderBy('id')->take(5)->get();

    // Tambah null jika data kurang dari 5 agar tetap 5 slot
    while ($sliders->count() < 5) {
        $sliders->push(null);
    }

    return view('index_new', ['sliders' => $sliders]);
});
Route::post('/slider/update', [SliderController::class, 'update'])->name('slider.update');

// END Routes Gambar Slider




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

Route::get('about_us', function () {
    return view('pages.about_us');
});

Route::get('about_us_admin', function () {
    return view('pages.about_us_admin');
});

Route::get('ulasanproduk', function () {
    return view('pages.ulasan_produk');
});

Route::get('/catalog', function () {
    return view('catalog'); // atau controller kamu
})->name('catalog');

Route::get('/about_us', function () {
    return view('pages.about_us');
})->name('about_us');



Route::get('produkdetail', function () {
    return view('pages.produk_detail');
})->name('produkdetail');



Route::get('/usersdashboard', [UserController::class, 'index'])->name('usersdashboard');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::resource('users', UserController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

