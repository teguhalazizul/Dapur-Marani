<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SejarahSingkat extends Model
{
    use HasFactory;
protected $table = 'sejarahsingkats';
    protected $fillable = ['konten']; // Kolom yang dapat diisi
}
