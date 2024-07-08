<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function datatentang() {
        $tentang = Tentang::first();
        return view('admin.tentang.list', compact('tentang'));
    }

    public function datatentangcreate() {
        return view('admin.tentang.create');
    }

    public function datatentangcreateproses(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Tentang::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('datatentang')->with('success', 'Data Tentang berhasil ditambahkan');
    }

    public function datatentangedit($id) {
        $tentang = Tentang::findOrFail($id);
        return view('admin.tentang.edit', compact('tentang'));
    }

    public function datatentangupdate(Request $request, $id) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tentang = Tentang::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $tentang->image = $imageName;
        }

        $tentang->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $tentang->image,
        ]);

        return redirect()->route('datatentang')->with('success', 'Data Tentang berhasil diupdate');
    }

    public function datatentangdelete($id) {
        $tentang = Tentang::findOrFail($id);
        $tentang->delete();
        return redirect()->route('datatentang')->with('success', 'Data Tentang berhasil dihapus');
    }
}
