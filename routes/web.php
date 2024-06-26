<?php
use  App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/Pesan', 'pesan')->name('pesan');
    Route::get('/AntarJemput', 'antarjemput')->name('antarjemput');
    Route::get('/DaftarHarga', 'daftarharga')->name('daftarharga');
    Route::get('/PaketLainnya', 'paketlainnya')->name('paketlainnya');
});

