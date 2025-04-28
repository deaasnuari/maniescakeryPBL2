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