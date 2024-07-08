<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Role;
use App\Models\User;

class PenggunaController extends Controller
{
    /* Data Users Admin */
    public function index() {
        // Ambil data pengguna dengan peran admin
        $adminRole = Role::where('role_name', 'admin')->first();
        $users = User::where('role_id', $adminRole->id)->get();

        return view('admin.users.admin.list', compact('users'));
    }

    public function admincreate() {
        return view('admin.users.admin.craete');
    }

    public function admincreateproses(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_user' => 'required|in:active,nonactive',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->alamat = $request->alamat;
        $user->status_user = $request->status_user;
        $user->role_id = $request->role_id;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->image = $imagePath;
        }

        $user->save();

        return redirect()->route('admin.pengguna.index')->with('success', 'User created successfully.');
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('admin.users.admin.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
            'phone' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_user' => 'required|in:active,nonactive',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->phone = $request->phone;
        $user->alamat = $request->alamat;
        $user->status_user = $request->status_user;

        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->image = $imagePath;
        }

        $user->save();

        return redirect()->route('admin.pengguna.index')->with('success', 'User updated successfully.');
    }

    public function delete($id) {
        $user = User::findOrFail($id);
    
        // Hapus gambar pengguna jika ada
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }
    
        // Hapus pengguna
        $user->delete();
    
        return redirect()->route('admin.pengguna.index')->with('success', 'User deleted successfully.');
    }

    /* Data Users Pelanggan */
    public function listdatapelanggan() {
        $pelangganRole = Role::where('role_name', 'pelanggan_users')->first();
        $users = User::where('role_id', $pelangganRole->id)->get();
        return view('admin.users.pelanggan.list', compact('users'));
    }

    public function pelanggancreate() {
        return view('admin.users.pelanggan.create');
    }

    public function pelanggancreateproses(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_user' => 'required|in:active,nonactive',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email; 
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->alamat = $request->alamat;
        $user->status_user = $request->status_user;
        $user->role_id = Role::where('role_name', 'pelanggan_users')->first()->id;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->image = $imagePath;
        }

        $user->save();

        return redirect()->route('pelanggan.listdatapelanggan')->with('success', 'User created successfully.');
    }

    public function pelangganedit($id) {
        $user = User::findOrFail($id);
        return view('admin.users.pelanggan.edit', compact('user'));
    }
    
    public function pelangganupdate(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
            'phone' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_user' => 'required|in:active,nonactive',
        ]);
    
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->phone = $request->phone;
        $user->alamat = $request->alamat;
        $user->status_user = $request->status_user;
    
        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->image = $imagePath;
        }
    
        $user->save();
    
        return redirect()->route('pelanggan.listdatapelanggan')->with('success', 'User updated successfully.');
    }
    

    public function pelanggandelete($id) {
        $user = User::findOrFail($id);
    
        // Hapus gambar pengguna jika ada
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }
    
        // Hapus pengguna
        $user->delete();
    
        return redirect()->route('pelanggan.listdatapelanggan')->with('success', 'User deleted successfully.');
    }
    
}
