<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = ['tagline', 'headline', 'deskripsi', 'gambar'];

    public $timestamps = false; // Nonaktifkan timestamps
}
