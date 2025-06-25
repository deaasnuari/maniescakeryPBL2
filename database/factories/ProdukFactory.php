<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kategori;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->word(),
            'harga' => fake()->numberBetween(10000, 100000),
            'kategori' => Kategori::inRandomOrder()->first()?->nama,
            'deskripsi' => fake()->sentence(),
            'status' => fake()->boolean(),
        ];
    }
}
