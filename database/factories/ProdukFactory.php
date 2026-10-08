<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    protected $model = Produk::class;

    public function definition()
    {
        return [
            'nama_produk' => $this->faker->word(),
            'deskripsi' => $this->faker->sentence(3),
            'harga' => $this->faker->randomNumber(6),
            'stok' => $this->faker->randomNumber(2),
        ];
    }
}
