<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $kategoris = [
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
        ];

        foreach ($kategoris as $kategori) {
            Kategori::create(['nama' => $kategori]);
        }
    }
}