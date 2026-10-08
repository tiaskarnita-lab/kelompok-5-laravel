<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::create([
            'nama_produk' => 'Bakso Spesial',
            'deskripsi' => 'Bakso daging sapi asli dengan kuah gurih dan mie',
            'harga' => 15000,
            'stok' => 50,
        ]);

        Produk::factory(20)->create();
    }
}
