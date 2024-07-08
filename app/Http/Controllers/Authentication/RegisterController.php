<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register() {
        // Role pelanggan_users memiliki id 2
        $pelangganRole = Role::where('role_name', 'pelanggan_users')->first();
        return view('auth.register', compact('pelangganRole'));
    }

    public function registerprosess(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Role pelanggan_users memiliki id 2
        $pelangganRoleId = Role::where('role_name', 'pelanggan_users')->first()->id;

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role_id' => $pelangganRoleId,
        ]);

        // Jangan login otomatis setelah registrasi
        return redirect()->route('login')->with('success', 'Register successful. Silahkan Login' );
    }
}
