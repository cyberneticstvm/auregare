<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitEmail;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img('mini')]);
    }

    function contactSubmit(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => 'required',
                'mobile' => 'required|numeric',
                'email' => 'required|email',
                'message' => 'required',
                'captcha' => 'required|captcha',
            ],
            ['captcha.captcha' => 'Invalid captcha code.']
        );
        try {
            Mail::to('are@auregagroup.com')->cc('info@auregagroup.com')->send(new ContactFormSubmitEmail($request));
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Contact form submitted successfully!");
    }
}
