<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public $timestamps = 'false';

    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'kategori',
        'status'
    ];

    public function kategoriModel()
    {
        return $this->belongsTo(Kategori::class, 'kategori', 'nama');
    }
}