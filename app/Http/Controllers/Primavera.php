<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Primavera extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }
    
    public function work()
    {
        return view('work');
    }
}
