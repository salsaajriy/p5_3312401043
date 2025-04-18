<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gambar', function () {
    return view('test');
});

Route::get('/loginadmin', function () {
    return view('login_admin');
});


