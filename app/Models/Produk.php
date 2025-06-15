<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    public $timestamps = false;

    public function kategoriRelasi()
    {
        return $this->belongsTo(Kategori::class, 'kategori');
    }

}
