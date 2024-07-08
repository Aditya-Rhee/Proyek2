<?php

namespace App\Http\Controllers\Pelanggan_Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Pemesan_laundry;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Kategori_paket_kiloan;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PemesananController extends Controller
{
    /* Memesan Jasa Laundry */
    public function pemesanan() {
        $user = Auth::user();
        $kategori_paket_kiloans = Kategori_paket_kiloan::all();
        return view('user.boking_pesan_laundry', compact('user', 'kategori_paket_kiloans'));
    }

    public function pemesananprosess(Request $request) {
        $request->validate([
            'jenis_paket' => 'required|in:paket_kiloan,paket_satuan',
            'kategori_paket_kiloans_id' => 'required_if:jenis_paket,paket_kiloan|exists:kategori_paket_kiloans,id',
            'status_pesanan' => 'required|in:boking_pemesanan_cucian_dulu,tidak_boking_pemesanan_cucian',
            'jenis_pengambilan_cucian' => 'required|in:ditempat,diantar',
            'jenis_pembayaran' => 'required|in:cash,transfer',
        ]);

        Pemesan_laundry::create([
            'user_id' => Auth::id(),
            'kategori_paket_kiloans_id' => $request->kategori_paket_kiloans_id,
            'jenis_paket' => $request->jenis_paket,
            'status_pesanan' => $request->status_pesanan,
            'jenis_pengambilan_cucian' => $request->jenis_pengambilan_cucian,
            'jenis_pembayaran' => $request->jenis_pembayaran,
        ]);

        return redirect()->route('pemesanan_pelanggan')->with('success', 'Pemesanan berhasil dilakukan.');
    }

    /* Status Pemesanan */
    public function statuspemesanan() {
        $user = Auth::user();
        $pemesanans = Pemesan_laundry::where('user_id', $user->id)->get();
        return view('user.status_boking_laundry', compact('pemesanans'));
    }

    /* Cetak Struk Pemesanan PDF */
    public function cetakStruk($id)
    {
        $pemesanan = Pemesan_laundry::findOrFail($id);
        $pdf = PDF::loadView('user.cetak_struk', compact('pemesanan'));
        return $pdf->download('struk_pemesanan_'.$pemesanan->id.'.pdf');
    }
}
