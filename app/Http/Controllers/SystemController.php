<?php

namespace App\Http\Controllers;

use App\Models\NewsM;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function dashboard ()
    {
        
        return view('header');
    }

    public function index()
    {
        return view('pages/index');
    }

    public function news()
    {
        return view('pages/news');
    }

    public function news1()
    {
        return view('pages/news1');
    }

    public function footer()
    {
        return view('pages/footer');
    }

    public function news2()
    {
        return view('pages/news2');
    }

    public function news3()
    {
        return view('pages/news3');
    }

}
