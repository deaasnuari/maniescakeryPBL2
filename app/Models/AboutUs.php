<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_us';
    protected $fillable = [
    'section_left', 'section_right',
    'philosophy_left', 'philosophy_right',
    'image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6'
    ];
}
