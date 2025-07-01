<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Kategori;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = ['nama', 'harga', 'kategori', 'deskripsi', 'status', 'gambar', 'link_instagram'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori', 'nama');
    }
}
