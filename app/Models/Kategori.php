<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Produk;

class kategori extends Model
{
    protected $table = 'kategori';

    public function produk()
    {
        return $this->hasMany(Produk::class, 'kategori', 'nama');
    }

}
