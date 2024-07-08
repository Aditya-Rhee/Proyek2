<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pemesan_laundry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalAdmin = User::whereHas('role', function($query) {
            $query->where('role_name', 'admin');
        })->count();

        $totalPelanggan = User::whereHas('role', function($query) {
            $query->where('role_name', 'pelanggan_users');
        })->count();

        $totalPendapatan = Pemesan_laundry::sum('total_pembayaran');

        $totalPaketKiloan = Pemesan_laundry::where('jenis_paket', 'paket_kiloan')->count();

        return view('admin.dashboard.index', compact('totalAdmin', 'totalPelanggan', 'totalPendapatan', 'totalPaketKiloan'));
    }

    public function profile($id) {
        $user = User::findOrFail($id);
        return view('admin.profile', compact('user'));
    }

    public function updateprofile(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'phone' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alamat' => 'nullable|string',
            'status_user' => 'required|in:active,nonactive',
        ]);

        $user = User::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $user->image = $imageName;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->alamat = $request->alamat;
        $user->status_user = $request->status_user;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('editprofile', $user->id)->with('success', 'Profile berhasil diperbarui');
    }
}
