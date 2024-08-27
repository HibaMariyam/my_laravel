<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'dummy'])->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::fallback(
    function(){
        return "<h1>Page Not Found</h1>";
    }
);