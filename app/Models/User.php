<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';  // nama tabel

    public $timestamps = false;  // nonaktifkan timestamps

    protected $fillable = ['username', 'email', 'telephone', 'password', 'role'];

    protected $hidden = ['password'];
}
