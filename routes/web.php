<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/About', 'about')->name('about');
    Route::get('/Contact', 'contact')->name('contact');
    Route::get('/Syarat&Ketentuan', 'syaratketentuan')->name('syaratketentuan');
    Route::get('/Service', 'service')->name('service');
    Route::get('/Pesan', 'pesan')->name('frontend/pesan');
    Route::get('/AntarJemput', 'antarjemput')->name('antarjemput');
    Route::get('/DaftarHarga', 'daftarharga')->name('daftarharga');
    Route::get('/PaketLainnya', 'paketlainnya')->name('paketlainnya');
    Route::get('/home', 'home')->name('frontend/home');
});

Route::get('/login',function(){
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login-process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout-process');


// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/dashboard', function () {
    return view('admin.layout.main');
})->name('dashboard');


// Route::post('/register', 'Auth\RegisterController@register');

// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);
