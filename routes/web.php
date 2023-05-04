<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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
    return view('landing', [
        'hal' => 'Wujudkan Ide Digitalisasi Anda!'
    ]);
});

// stakeholder Route
Route::middleware(['auth', 'user-access:stakeholder'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Admin Route List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

// Developer Route List
Route::middleware(['auth', 'user-access:developer'])->group(function () {
    Route::get('/developer/home', [HomeController::class, 'devHome'])->name('dev.home');
});




Route::get('/auth', function () {
    return view('auth.login', [
        'hal' => 'Registrasi / Masuk'
    ]);
})->name('autentikasi');

Route::group(['prefix' => 'auth'], function() {
    // Routing ke laman Register (stakeholder)
    Route::get('/register', [RegisterController::class, 'stakeholderRegister'])->name('register');
    Route::post('/register', [RegisterController::class, 'stakeholderRegister']);
});


Route::get('/auth/regisdev', function () {
    return view('auth.regisdev');
})->name('regisdev');

// Routing ke laman cara kerja (landing page)
Route::get('/cara-kerja', function () {
    return view('landingcomp.carker', [
        'hal' => 'Cara Kerja'
    ]);
})->name('carker');

// Routing ke laman tentang kami (landing page)
Route::get('/tentang', function () {
    return view('landingcomp.about', [
        'hal' => 'Tentang Kami'
    ]);
})->name('tentang');

Auth::routes();



// Route::get('/register', 'RegisterController@create');
// Route::post('/register', 'RegisterController@store');

// Route::get('/login', 'SessionsController@create');
// Route::post('/login', 'SessionsController@store');
// Route::get('/logout', 'SessionsController@destroy');



//TODO: Bwt ngerancang frontend stakeholder dashboard (HARUS DIHAPUS)
Route::get('/testing/stakeholder', function () {
    return view('home');
})->setUri('tesstake.dashboard');

//TODO: Bwt ngerancang frontend Developer dashboard (HARUS DIHAPUS)
Route::get('/testing/dev',function(){
    return view('devHome');
})->setUri('tesdev.dashboard');

Route::get('/testing/admin',function(){
return view('adminHome');
})->setUri('tesadm.dashboard');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');