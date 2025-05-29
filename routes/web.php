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
use App\Http\Controllers\ListProdukController;



Route::get('/', [ProdukController::class, 'show']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/list_produk', [ListProdukController::class, 'show']);
Route::post('/list_produk', [ListProdukController::class, 'simpan'])->name('produk.simpan');

