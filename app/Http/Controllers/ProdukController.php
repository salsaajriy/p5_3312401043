<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProdukController extends Controller
{
    public function show()
    {
        $data = [
            ['id' => 1, 'produk' => 'Lenovo'],
            ['id' => 2, 'produk' => 'Asus'],
            ['id' => 3, 'produk' => 'Acer']
        ]; 

        // Mengirim data ke view 'list_produk'
        return view('list_produk', compact('data'));
    }
}
