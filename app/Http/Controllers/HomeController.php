<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    Handle The Root Request
    
    Params Illuminate\Http\Request
    return
    */
    public function home()
    {
        return view('home');
    }

    public function news()
    {
        return view('formfilled');
    }
    public function helpline()
    {
        return view('emergency');
    }

    public function cluster()
    {
        return view('cluster');
    }
    public function faq()
    {
        return view('faq');
    }
    public function policy()
    {
        return view('policy');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
}
