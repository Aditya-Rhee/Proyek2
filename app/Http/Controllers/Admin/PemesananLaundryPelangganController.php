<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemesan_laundry;
use App\Models\User;
use App\Models\Kategori_paket_kiloan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PemesananLaundryPelangganController extends Controller
{
    public function datapemesananpelanggan() {
        $pemesanans = Pemesan_laundry::with('user', 'kategoriPaketKiloan')->get();
        return view('admin.pemesananpelanggan.list', compact('pemesanans'));
    }

    public function detailpemesananpelanggan($id) {
        $pemesanan = Pemesan_laundry::with('user', 'kategoriPaketKiloan')->findOrFail($id);
        return view('admin.pemesananpelanggan.show', compact('pemesanan'));
    }

    public function pemesananpelanggancreate() {
        $kategori_paket_kiloans = Kategori_paket_kiloan::all();
        return view('admin.pemesananpelanggan.create', compact('kategori_paket_kiloans'));
    }

    public function pemesananpelanggancreateproses(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:15',
            'alamat' => 'required|string',
            'status_pesanan' => 'required|string',
            'jenis_paket' => 'required|string',
            'kategori_paket_kiloans_id' => 'nullable|exists:kategori_paket_kiloans,id',
            'jenis_pengambilan_cucian' => 'required|string',
            'jenis_pembayaran' => 'required|string',
            'status_pembayaran' => 'required|string',
            'status_pesanan_laundry' => 'required|string',
            'total_pembayaran' => 'required|string',
            'timbang_berat' => 'required|string',
            'keterangan_pemesanan' => 'nullable|string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'password' => Hash::make('defaultpassword'), // Set default password
            'role_id' => 2, // pelanggan_users
        ]);

        Pemesan_laundry::create([
            'user_id' => $user->id,
            'kategori_paket_kiloans_id' => $request->kategori_paket_kiloans_id,
            'jenis_paket' => $request->jenis_paket,
            'status_pesanan' => $request->status_pesanan,
            'jenis_pengambilan_cucian' => $request->jenis_pengambilan_cucian,
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
            'status_pesanan_laundry' => $request->status_pesanan_laundry,
            'total_pembayaran' => $request->total_pembayaran,
            'timbang_berat' => $request->timbang_berat,
            'keterangan_pemesanan' => $request->keterangan_pemesanan,
        ]);

        return redirect()->route('pelanggan.datapemesananpelanggan')->with('success', 'Pemesanan berhasil ditambahkan');
    }

    public function pemesananpelangganupdate(Request $request, $id) {
        $request->validate([
            'timbang_berat' => 'required|string',
            'total_pembayaran' => 'required|string',
            'keterangan_pemesanan' => 'required|string',
            'status_pesanan_laundry' => 'required|string',
            'status_pembayaran' => 'required|string',
        ]);

        $pemesanan = Pemesan_laundry::findOrFail($id);
        $pemesanan->update([
            'timbang_berat' => $request->timbang_berat,
            'total_pembayaran' => $request->total_pembayaran,
            'keterangan_pemesanan' => $request->keterangan_pemesanan,
            'status_pesanan_laundry' => $request->status_pesanan_laundry,
            'status_pembayaran' => $request->status_pembayaran,
        ]);

        return redirect()->route('pelanggan.datapemesananpelanggan')->with('success', 'Data pemesanan berhasil diupdate');
    }

    public function admincetakStruk($id) {
        $pemesanan = Pemesan_laundry::findOrFail($id);
        $pdf = PDF::loadView('admin.pemesananpelanggan.cetak_struk', compact('pemesanan'));
        return $pdf->download('struk_pemesanan_pelanggan_'.$pemesanan->id.'.pdf');
    }
    
}
