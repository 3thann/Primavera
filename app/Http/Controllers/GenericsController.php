<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericsController extends Controller
{
    public function index()
    {
        return view('generics.index');
    }

    public function about()
    {
        return view('generics.about');
    }

    public function contact()
    {
        return view('generics.contact');
    }

    public function services()
    {
        return view('generics.services');
    }
    
    public function work()
    {
        return view('generics.work');
    }
}
