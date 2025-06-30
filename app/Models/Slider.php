<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider'; // atau 'sliders' jika nama tabel jamak

    protected $fillable = [
        'gambar',
    ];

    public $timestamps = false;
}
