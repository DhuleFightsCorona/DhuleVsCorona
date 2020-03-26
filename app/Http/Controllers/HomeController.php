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
        return view('news');
    }

    


}
