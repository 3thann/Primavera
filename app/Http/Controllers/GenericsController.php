<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;


class GenericsController extends Controller
{
    public function index()
    {
        $images = Image::all();
        
        return view('generics.index', compact('images'));
    }

    public function about()
    {
        return view('generics.about');
    }

}
