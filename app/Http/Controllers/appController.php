<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    //
    function home()
    {
        return view('home');
    }
    function portfolio()
    {
        return view('portfolio');
    }
    function contact()
    {
        return view('contact');
    }
    function blog()
    {
        return view('blog');
    }
    function resume()
    {
        return view('resume');
    }
    
}
