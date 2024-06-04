<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function pesan(){
        return view('pesan');
    }
    public function syaratketentuan(){
        return view('syaratketentuan');
    }
    public function antarjemput(){
        return view('antarjemput');
    }
    public function daftarharga(){
        return view('daftarharga');
    }
}
