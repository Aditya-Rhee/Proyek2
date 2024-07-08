<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function datakontak() {
        $kontaks = Kontak::all();
        return view('admin.Kontak.list', compact('kontaks'));
    }

    public function datakontakcreate() {
        return view('admin.Kontak.create');
    }

    public function datakontakcreateproses(Request $request) {
        $request->validate([
            'telepon' => 'required|string',
            'wa' => 'required|string',
            'jam_kerja' => 'required|string',
            'hari_kerja' => 'required|string',
        ]);

        Kontak::create($request->all());
        return redirect()->route('datakontak')->with('success', 'Kontak berhasil ditambahkan');
    }

    public function datakontakedit($id) {
        $kontak = Kontak::findOrFail($id);
        return view('admin.Kontak.edit', compact('kontak'));
    }

    public function datakontakupdate(Request $request, $id) {
        $request->validate([
            'telepon' => 'required|string',
            'wa' => 'required|string',
            'jam_kerja' => 'required|string',
            'hari_kerja' => 'required|string',
        ]);

        $kontak = Kontak::findOrFail($id);
        $kontak->update($request->all());
        return redirect()->route('datakontak')->with('success', 'Kontak berhasil diperbarui');
    }

    public function datakontakdelete($id) {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();
        return redirect()->route('datakontak')->with('success', 'Kontak berhasil dihapus');
    }
}
