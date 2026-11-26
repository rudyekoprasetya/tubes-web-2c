<?php

use Illuminate\Support\Facades\Route;

//route ke home
Route::get('/', function () {
    return view('home');
});

Route::get('/galeri', function () {
    return view('galeri');
});