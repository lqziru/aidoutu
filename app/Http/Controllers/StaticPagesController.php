<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('statics/home');
    }

    public function help()
    {
        return view('statics/help');
    }

    public function about()
    {
        return view('statics/about');
    }
}
