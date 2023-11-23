<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Webcontroller extends Controller
{
    public function home(){
        return view('home');
    }

    public function contact()
    {
       return view('contact');
    }

    public function about()
    {
       return view('contact');
    }

    public function rings()
    {
       return view('rings');
    }

    public function bracelets()
    {
       return view('bracelets');
    }

    public function necklace()
    {
       return view('necklace');
    }

    public function earring()
    {
       return view('earring');
    }
}
