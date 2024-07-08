<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $table = 'kontaks';

    // Tambahkan properti fillable
    protected $fillable = [
        'telepon',
        'wa',
        'jam_kerja',
        'hari_kerja'
    ];
}
