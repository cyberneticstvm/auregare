<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        return view('web.index');
    }

    function property()
    {
        return view('web.property');
    }

    function about()
    {
        return view('web.about');
    }

    function blog()
    {
        return view('web.blog');
    }

    function blogDetail($slug)
    {
        return view('web.blog-detail');
    }

    function contact()
    {
        return view('web.contact');
    }

    function privacy()
    {
        return view('web.privacy');
    }
}
