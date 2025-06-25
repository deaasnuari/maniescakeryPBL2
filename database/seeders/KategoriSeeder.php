<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = ['Cake', 'Cupcake', 'Brownies', 'Cookies', 'Small Cake'];

        foreach ($kategori as $nama) {
            Kategori::create(['nama' => $nama]);
        }
    }
}
