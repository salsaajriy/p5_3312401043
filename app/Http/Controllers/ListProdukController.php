<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function show()
    {
        $data = Produk::where('harga', '>', 10000)
            ->orderBy('created_at', 'desc')
            ->get();
         foreach ($data as $produk) {
            $nama[] = $produk->nama;
            $desc[] = $produk->deskripsi;
            $harga[] = $produk->harga;
            $created[] = $produk->created_at;
         }
         return view('list_produk', compact('nama', 'desc', 'harga', 'created'));
         
    }
}
