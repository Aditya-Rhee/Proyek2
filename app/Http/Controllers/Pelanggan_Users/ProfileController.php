<?php

namespace App\Http\Controllers\Pelanggan_Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index() {
        $user = auth()->user();
        return view('user.profile', compact('user'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8',
            'phone' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048'
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }
        $user->phone = $request->phone;
        $user->alamat = $request->alamat;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $user->image = $imagePath;
        }

        $user->save();

        return redirect()->route('profilepelanggan')->with('success', 'Profile updated successfully');
    }
}
