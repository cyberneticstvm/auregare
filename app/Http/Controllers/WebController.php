<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        return view('web.index');
    }

    function about()
    {
        return view('web.about');
    }

    function blog()
    {
        return view('web.blog');
    }

    function contact()
    {
        return view('web.contact');
    }
}
