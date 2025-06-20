<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KategoriFactory extends Factory
{
    public function definition()
    {
        return [
            'nama' => $this->faker->unique()->randomElement([
                'Kue Basah',
                'Kue Kering',
                'Kue Ulang Tahun',
                'Kue Wedding',
                'Kue Tradisional',
                'Donat',
                'Roti Manis',
                'Pastry',
                'Tart',
                'Cupcake'
            ])
        ];
    }
}