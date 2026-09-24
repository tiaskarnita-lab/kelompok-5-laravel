<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    private function dataProduk(){
        return [
            ['nama_produk' => 'Mie Ayam', 'harga' => '15000'],
            ['nama_produk' => 'Es Gabus', 'harga' => '5000'],
            ['nama_produk' => 'Nuget Borax', 'harga' => '1000'],
        ];
    }

    public function index()
    {
        $produks = $this->dataProduk();

        return view('produk.index', compact('produks'));
    }
}

