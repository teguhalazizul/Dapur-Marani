<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'whatsapp_url', 'instagram_url'];

    // Menonaktifkan penggunaan timestamps
    public $timestamps = false;
}
