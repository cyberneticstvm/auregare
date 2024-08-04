<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/property', 'property')->name('property');
        Route::get('/about', 'about')->name('about');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/blogdetails/{slug}', 'blogDetail')->name('blog.detail');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/privacy-policy', 'privacy')->name('privacy.policy');
        Route::get('/refresh/captcha', 'refreshCaptcha')->name('refresh.captcha');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
    });
});
Route::get('/login', function () {
    return view('admin.user.login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::prefix('')->middleware(['auth'])->group(function () {
    Route::get('/dash', [UserController::class, 'dashboard'])->name('user.dash');

    Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/create', [BlogController::class, 'store'])->name('blog.save');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/edit/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');

    Route::get('/comments/{id}', [BlogController::class, 'comments'])->name('blog.comments');


    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/create', [UserController::class, 'store'])->name('user.save');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/edit/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});
