<?php

use Illuminate\Support\Facades\Route;

//route ke home
Route::get('/', function () {
    return view('home');
});
