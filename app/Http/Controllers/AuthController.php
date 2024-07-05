<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->intended('dashboard-admin');
            } else {
                return redirect()->intended('dashboard-user');
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda telah berhasil logout');
    }
}

class AdminController extends Controller

{
    public function dashboard()
    {
        if (Gate::allows('access-admin')) {
            return view('admin.dashboard');
        }
        return redirect('/login')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }

}

class UserController extends Controller
{
    public function dashboard()
    {






        if (Gate::allows('access-user')) {
            return view('user.dashboard');
        }
        return redirect('/login')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
