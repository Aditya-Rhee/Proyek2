<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
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
