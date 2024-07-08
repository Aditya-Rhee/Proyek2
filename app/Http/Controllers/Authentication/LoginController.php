<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function loginprosess(Request $request) {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        $validationRules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $request->validate($validationRules);

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            // Redirect based on role
            $userRole = Auth::user()->role->role_name;

            if ($userRole === 'admin') {
                return redirect()->intended('/admin/dashboard')->with('success', 'Login successful');
            } elseif ($userRole === 'pelanggan_users') {
                return redirect()->intended('/pelanggan/profile')->with('success', 'Login successful');
            } else {
                Auth::logout();
                return redirect('/login')->with('error', 'Unauthorized access');
            }
        } else {
            return redirect('/login')->with('error', 'The email or password you entered is incorrect.');
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Logout successful');
    }
}
