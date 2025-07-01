<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user'; 
    
    protected $fillable = ['username', 'email', 'telepon', 'password', 'role', 'gambar'];
    
    protected $hidden = ['password'];

    // public $timestamps = true;

    public function setUpdatedAt($value)
    {
        // kosongin aja guyss
    }
}
