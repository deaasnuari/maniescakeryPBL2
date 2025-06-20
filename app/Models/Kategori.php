<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $primaryKey = 'nama';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = 'false';

    protected $fillable = [
        'nama'
    ];

    public function produks()
    {
        return $this->hasMany(Produk::class, 'kategori', 'nama');
    }
}