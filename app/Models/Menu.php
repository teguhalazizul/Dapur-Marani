<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
//properti, lalu buat controller menu dg perintah php artisan make:controller MenuController --resource

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar',
    ];
}
