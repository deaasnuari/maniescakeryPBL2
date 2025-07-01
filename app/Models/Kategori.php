<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Produk;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama'];
    protected $primaryKey = 'nama';
    public $incrementing = false;
    protected $keyType = 'string';

    public function produk()
    {
        return $this->hasMany(Produk::class, 'kategori', 'nama');
    }

}
