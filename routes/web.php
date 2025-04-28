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


use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;



Route::get('/produk', [ProdukController::class, 'show']);
Route::get('/home', [HomeController::class, 'index']);
