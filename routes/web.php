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
<<<<<<< HEAD
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/pesan', 'pesan')->name('pesan');
=======
    Route::get('/About', 'about')->name('about');
    Route::get('/Contact', 'contact')->name('contact');
    Route::get('/Syarat&Ketentuan', 'sk')->name('sk');
    Route::get('/Service', 'service')->name('service');
>>>>>>> 29f94bc3034151ada0c15fcacfff200a18408e84
});

