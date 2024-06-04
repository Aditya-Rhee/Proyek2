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
<<<<<<< HEAD
    public function pesan(){
        return view('pesan');
=======
    public function sk(){
        return view('sk');
    }
    public function service(){
        return view('service');
>>>>>>> 29f94bc3034151ada0c15fcacfff200a18408e84
    }
}
