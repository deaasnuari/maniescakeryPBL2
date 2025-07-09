<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';
    protected $fillable = [
    'about_left', 'about_right',
    'philosophy_left', 'philosophy_right',
    'galeri'
    ];
}
