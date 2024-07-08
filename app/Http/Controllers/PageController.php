<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Tentang;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function about(){
        $tentang = Tentang::first(); // Mengambil data pertama dari tabel `tentangs`
        return view('frontend.about', compact('tentang'));
    }

    public function contact(){
        $kontak = Kontak::first(); // Mengambil data pertama dari tabel `kontaks`
        return view('frontend.contact', compact('kontak'));
    }

    public function pesan(){
        return view('frontend.pesan');
    }
    public function syaratketentuan(){
        return view('frontend.syaratketentuan');
    }
    public function antarjemput(){
        return view('frontend.antarjemput');
    }
    public function daftarharga(){
        return view('frontend.daftarharga');
    }
    public function paketlainnya(){
        return view('frontend.paketlainnya');
    }
}
