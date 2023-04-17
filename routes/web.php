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
    return view('landing',[
        'hal'=>'Wujudkan Ide Digitalisasi Anda!'
    ]);
});

//Routing ke laman login/register
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('regislog');

Route::get('/auth',function(){
return view('auth.login',[
    'hal'=>'Registrasi / Masuk'
]);
})->name('autentikasi');

// Routing ke laman cara kerja (landing page)
Route::get('/cara-kerja', function () {
    return view('landingcomp.carker',[
        'hal'=>'Cara Kerja'
    ]);
})->name('carker');

// Routing ke laman 
Route::get('/tentang', function () {
    return view('landingcomp.about',[
        'hal'=>'Tentang Kami'
    ]);
})->name('tentang');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');