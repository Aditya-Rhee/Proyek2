<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_paket_kiloan extends Model
{
    use HasFactory;

    protected $table = 'kategori_paket_kiloans';

    public function pemesanLaundries()
    {
        return $this->hasMany(Pemesan_laundry::class, 'kategori_paket_kiloans_id');
    }
}
