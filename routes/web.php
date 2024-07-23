<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {

    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });
    
});