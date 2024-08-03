<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {

    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/property', 'property')->name('property');
        Route::get('/about', 'about')->name('about');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/blog/{slug}', 'blogDetail')->name('blog.detail');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/privacy-policy', 'privacy')->name('privacy.policy');
        Route::get('/refresh/captcha', 'refreshCaptcha')->name('refresh.captcha');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
    });
});
