<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    public function definition()
    {
        $namaKue = [
            'Brownies Coklat Premium',
            'Cheese Cake New York',
            'Red Velvet Cake',
            'Tiramisu Original',
            'Lapis Legit Surabaya',
            'Bolu Gulung Pandan',
            'Nastar Nanas',
            'Kastengel Keju',
            'Putri Salju',
            'Donat Glaze',
            'Croissant Butter',
            'Black Forest Cake',
            'Opera Cake',
            'Tart Buah Segar',
            'Cupcake Vanilla',
            'Onde-onde Kacang Hijau',
            'Klepon Gula Merah',
            'Bika Ambon',
            'Martabak Manis Mini',
            'Roti Boy Original'
        ];

        $deskripsiKue = [
            'Kue dengan tekstur lembut dan rasa yang autentik, dibuat dengan bahan-bahan berkualitas tinggi.',
            'Cake premium dengan cita rasa yang khas dan presentasi yang menarik.',
            'Dibuat dengan resep tradisional yang telah diwariskan turun temurun.',
            'Kue segar dengan topping yang berlimpah dan rasa yang tak terlupakan.',
            'Perpaduan sempurna antara kelembutan dan kelezatan dalam setiap gigitan.',
            'Cake layer yang cantik dengan cream yang lembut dan tidak terlalu manis.',
            'Kue kering dengan tekstur renyah dan rasa yang gurih manis.',
            'Dibuat fresh daily dengan bahan-bahan pilihan untuk menjaga kualitas.',
            'Kue dengan aroma harum dan tekstur yang pas di lidah.',
            'Specialty cake dengan dekorasi yang cantik, cocok untuk acara spesial.'
        ];

        return [
            'nama' => $this->faker->randomElement($namaKue),
            'harga' => $this->faker->randomFloat(0, 15000, 350000), // Harga kue dalam rupiah
            'deskripsi' => $this->faker->randomElement($deskripsiKue),
            'kategori' => Kategori::inRandomOrder()->first()->nama ?? 'Kue Basah',
            'status' => $this->faker->randomElement(['aktif', 'nonaktif'])
        ];
    }
}