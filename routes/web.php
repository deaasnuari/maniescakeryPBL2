<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('pages/landingadmin', function () {
    return view('pages/landingadmin');
});


Route::get('pages/profil', function () {
    return view('pages/profil');
});
