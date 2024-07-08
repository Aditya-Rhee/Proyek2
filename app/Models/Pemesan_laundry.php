<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesan_laundry extends Model
{
    use HasFactory;

    protected $table = 'pemesan_laundries';

    protected $fillable = [
        'user_id',
        'kategori_paket_kiloans_id',
        'jenis_paket',
        'status_pesanan',
        'jenis_pengambilan_cucian',
        'jenis_pembayaran',
        'status_pembayaran',
        'status_pesanan_laundry',
        'total_pembayaran',
        'keterangan_pemesanan',
        'timbang_berat',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kategoriPaketKiloan()
    {
        return $this->belongsTo(Kategori_paket_kiloan::class, 'kategori_paket_kiloans_id');
    }

}
