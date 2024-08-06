<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitEmail;
use App\Models\Blog;
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
        $blogs = Blog::where('status', 1)->latest()->paginate(10);
        $latest = Blog::where('status', 1)->latest()->limit(10)->get();
        return view('web.blog', compact('blogs', 'latest'));
    }

    function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->latest()->firstOrFail();
        $latest = Blog::where('id', '!=', $blog->id)->where('status', 1)->latest()->limit(10)->get();
        return view('web.blog-detail', compact('blog', 'latest'));
    }

    function contact()
    {
        return view('web.contact');
    }

    function privacy()
    {
        return view('web.privacy');
    }

    public function sitemap()
    {
        return response()->view('web.sitemap')->header('Content-Type', 'text/xml');
    }

    public function robots()
    {
        return response()->view('web.robots')->header('Content-Type', 'text/plain');
    }

    function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img('flat')]);
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
