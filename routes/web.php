<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\PemesananLaundryPelangganController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TentangController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Pelanggan_Users\PemesananController;
use App\Http\Controllers\Pelanggan_Users\ProfileController;


Route::get('/', function () {
    return redirect('/home');
});

/* Autentikasi */
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginprosess', [LoginController::class, 'loginprosess'])->name('loginprosess');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/registerprosess', [RegisterController::class, 'registerprosess'])->name('registerprosess');

/* Pengunjung */
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/home', [PageController::class, 'home'])->name('frontend/home');
Route::get('/About', [PageController::class, 'about'])->name('about');
Route::get('/Contact', [PageController::class, 'contact'])->name('contact');
Route::get('/Syarat&Ketentuan', [PageController::class, 'syaratketentuan'])->name('syaratketentuan');
Route::get('/Service', [PageController::class, 'service'])->name('service');
Route::get('/Pesan', [PageController::class, 'pesan'])->name('frontend/pesan');
Route::get('/AntarJemput', [PageController::class, 'antarjemput'])->name('antarjemput');
Route::get('/DaftarHarga', [PageController::class, 'daftarharga'])->name('daftarharga');
Route::get('/PaketLainnya', [PageController::class, 'paketlainnya'])->name('paketlainnya');

/* Pelanggan Users */
Route::middleware(['auth', 'user-access:pelanggan_users'])->group(function () {
    /* Profile Update */
    Route::get('/pelanggan/profile', [ProfileController::class, 'index'])->name('profilepelanggan');
    Route::post('/pelanggan/profile/update/{id}', [ProfileController::class, 'update'])->name('profilepelangganupdate');

    /* Pemesanan Jasa Laundry */
    Route::get('/pelanggan/pesan', [PemesananController::class, 'pemesanan'])->name('pemesanan_pelanggan');
    Route::post('/pelanggan/pesan/prosess', [PemesananController::class, 'pemesananprosess'])->name('pemesananprosesspelanggan');
    Route::get('/status_pemesanan/pelanggan', [PemesananController::class, 'statuspemesanan'])->name('status_pemesanan');
    Route::get('/cetak-struk/{id}', [PemesananController::class, 'cetakStruk'])->name('cetak.struk');
});

/* Admin Aplikasi */
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admindashboard');

   /* Data Profile Admin */
    Route::get('edit/profile/admin/{id}', [DashboardController::class, 'profile'])->name('editprofile');
    Route::post('update/profile/admin/{id}', [DashboardController::class, 'updateprofile'])->name('updateprofile');


    /* Manage Users Admin */
    Route::get('/listdataadmin', [PenggunaController::class, 'index'])->name('admin.pengguna.index');
    Route::get('/listdataadmin/create', [PenggunaController::class, 'admincreate'])->name('admin.pengguna.create');
    Route::post('/listdataadmin/createproses', [PenggunaController::class, 'admincreateproses'])->name('admin.pengguna.createproses');
    Route::get('/listdataadmin/edit/{id}', [PenggunaController::class, 'edit'])->name('admin.pengguna.edit');
    Route::post('/listdataadmin/update/{id}', [PenggunaController::class, 'update'])->name('admin.pengguna.update');
    Route::delete('/listdataadmin/{id}', [PenggunaController::class, 'delete'])->name('admin.pengguna.delete');

    /*Manage Users Pelanggan */
    Route::get('/listdatapelanggan', [PenggunaController::class, 'listdatapelanggan'])->name('pelanggan.listdatapelanggan');
    Route::get('/listdatapelanggan/create', [PenggunaController::class, 'pelanggancreate'])->name('pelanggan.pengguna.create');
    Route::post('/listdatapelanggan/createproses', [PenggunaController::class, 'pelanggancreateproses'])->name('pelanggan.pengguna.createproses');
    Route::get('/listdatapelanggan/edit/{id}', [PenggunaController::class, 'pelangganedit'])->name('pelanggan.pengguna.edit');
    Route::post('/listdatapelanggan/update/{id}', [PenggunaController::class, 'pelangganupdate'])->name('pelanggan.pengguna.update');
    Route::delete('/listdatapelanggan/delete/{id}', [PenggunaController::class, 'pelanggandelete'])->name('pelanggan.pengguna.delete');

    /* Data Pemesanan Pelanggan  */
    Route::get('/datapemesananpelanggan', [PemesananLaundryPelangganController::class, 'datapemesananpelanggan'])->name('pelanggan.datapemesananpelanggan');
    Route::get('/detailpemesananpelanggan/{id}', [PemesananLaundryPelangganController::class, 'detailpemesananpelanggan'])->name('pelanggan.pemesanan.detail');
    Route::get('/listdatapemesananpelanggan/create', [PemesananLaundryPelangganController::class, 'pemesananpelanggancreate'])->name('pemesananpelanggan.pengguna.create');
    Route::post('/listdatapemesananpelanggan/createproses', [PemesananLaundryPelangganController::class, 'pemesananpelanggancreateproses'])->name('pemesananpelanggan.pengguna.createproses');
    Route::post('/listdatapemesananpelanggan/update/{id}', [PemesananLaundryPelangganController::class, 'pemesananpelangganupdate'])->name('pemesananpelanggan.pengguna.update');
    Route::delete('/listdatapemesananpelanggan/delete/{id}', [PemesananLaundryPelangganController::class, 'pemesananpelanggandelete'])->name('pemesananpelanggan.pengguna.delete');
    Route::get('/admin/cetak-struk/{id}', [PemesananLaundryPelangganController::class, 'admincetakStruk'])->name('admincetak.struk');

    /* Data Tentang Kami */
    Route::get('/datatentang', [TentangController::class, 'datatentang'])->name('datatentang');
    Route::get('/listdatatentang/create', [TentangController::class, 'datatentangcreate'])->name('datatentang.create');
    Route::post('/listdatatentang/createproses', [TentangController::class, 'datatentangcreateproses'])->name('datatentang.createproses');
    Route::get('/listdatatentang/edit/{id}', [TentangController::class, 'datatentangedit'])->name('datatentang.edit');
    Route::post('/listdatatentang/update/{id}', [TentangController::class, 'datatentangupdate'])->name('datatentang.update');
    Route::delete('/listdatatentang/delete/{id}', [TentangController::class, 'datatentangdelete'])->name('datatentang.delete');

    /* Data Kontak */
    Route::get('/datakontak', [KontakController::class, 'datakontak'])->name('datakontak');
    Route::get('/listdatakontak/create', [KontakController::class, 'datakontakcreate'])->name('datakontak.create');
    Route::post('/listdatakontak/createproses', [KontakController::class, 'datakontakcreateproses'])->name('datakontak.createproses');
    Route::get('/listdatakontak/edit/{id}', [KontakController::class, 'datakontakedit'])->name('datakontak.edit');
    Route::post('/listdatakontak/update/{id}', [KontakController::class, 'datakontakupdate'])->name('datakontak.update');
    Route::delete('/listdatakontak/delete/{id}', [KontakController::class, 'datakontakdelete'])->name('datakontak.delete');

  /* Data Settings */
    Route::get('/datasettings', [SettingController::class, 'datasettings'])->name('datasettings');
    Route::get('/listdatasettings/create', [SettingController::class, 'datasettingscreate'])->name('datasettings.create');
    Route::post('/listdatasettings/createproses', [SettingController::class, 'datasettingscreateproses'])->name('datasettings.createproses');
    Route::get('/listdatasettings/edit/{id}', [SettingController::class, 'datasettingsedit'])->name('datasettings.edit');
    Route::post('/listdatasettings/update/{id}', [SettingController::class, 'datasettingsupdate'])->name('datasettings.update');
    Route::delete('/listdatasettings/delete/{id}', [SettingController::class, 'datasettingsdelete'])->name('datasettings.delete');


});