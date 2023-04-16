<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

//Routing ke laman login/register
Route::get('/login', function(){
return view('login');
})->name('auth');

// Routing ke laman cara kerja (landing page)
Route::get('/cara-kerja',function(){
return view('landingcomp.carker');
})->name('carker');

// Routing ke laman 
Route::get('/tentang',function(){
return view('landingcomp.about');
})->name('tentang');
