<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        // This method renders the view located at resources/views/Pages/index.blade.php
        return view('Pages.index');
    }

    public function about()
    {
        // This method renders the view located at resources/views/Pages/index.blade.php
        return view('Pages.about');
    }

    public function home()
    {
        // This method renders the view located at resources/views/Pages/index.blade.php
        return view('Pages.home');
    }

    public function services()
    {
        // This method renders the view located at resources/views/Pages/index.blade.php
        return view('Pages.services');
    }
}