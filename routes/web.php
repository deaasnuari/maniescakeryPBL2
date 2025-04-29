<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
//route untuk login
Route::get('/login', function () {
    return view('pages.login');
})->name('login');


//route untuk register
Route::get('/register', function () {
    return view('pages.register');
})->name('register');
