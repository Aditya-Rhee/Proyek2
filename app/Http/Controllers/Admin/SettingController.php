<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function datasettings() {
        $settings = Settings::all();
        return view('admin.Settings.list', compact('settings'));
    }

    public function datasettingscreate() {
        return view('admin.Settings.create');
    }

    public function datasettingscreateproses(Request $request) {
        $request->validate([
            'telephone' => 'required',
            'wa' => 'required',
            'caption' => 'required',
            'coppyright' => 'required',
        ]);

        Settings::create($request->all());

        return redirect()->route('datasettings')->with('success', 'Setting berhasil ditambahkan.');
    }

    public function datasettingsedit($id) {
        $setting = Settings::findOrFail($id);
        return view('admin.Settings.edit', compact('setting'));
    }

    public function datasettingsupdate(Request $request, $id) {
        $request->validate([
            'telephone' => 'required',
            'wa' => 'required',
            'caption' => 'required',
            'coppyright' => 'required',
        ]);

        $setting = Settings::findOrFail($id);
        $setting->update($request->all());

        return redirect()->route('datasettings')->with('success', 'Setting berhasil diperbarui.');
    }

    public function datasettingsdelete($id) {
        $setting = Settings::findOrFail($id);
        $setting->delete();

        return redirect()->route('datasettings')->with('success', 'Setting berhasil dihapus.');
    }
}
