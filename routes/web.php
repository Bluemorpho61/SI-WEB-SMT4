<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StakeholderController;
use Illuminate\Auth\Events\Authenticated;
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

// Route::group(['middleware'=>'guest'],function(){
//     Route::get('/',[HomeController::class,'keLogin'])->name('login');
//     Route::post('/',[HomeController::class,'login']);
// });

Route::post('/login',[LoginController::class,'login'])->name('login');


// Untuk semua registered user
Route::group(['middleware'=>['auth','tipe_user:0,1,2']],function(){
    Route::post('/logout',[HomeController::class,'logout']);
    Route::get('/redirect',[HomeController::class,'cek']);
})->name('verify');

// Untuk Stakeholder
Route::group(['middleware'=>['auth', 'tipe_user:0']],function(){
    Route::get('/stake',[StakeholderController::class,'index']);
});

// Untuk Admin
Route::group(['middleware'=>['auth','tipe_user:1']],function(){
    Route::get('/admin',[AdminController::class,'index']);
});

// Untuk Developer
Route::group(['middleware'=>['auth','tipe_user:2']],function(){
    Route::get('/developer',[DeveloperController::class,'index']);
});






Route::get('/admin', [AdminController::class,'index'])->name('admin-home');
Route::get('/dev',[DeveloperController::class,'index'])->name('dev-home');
Route::get('/stake',[StakeholderController::class,'index'])->name('stake-home');



Route::get('/auth', function () {
    return view('auth.login', [
        'hal' => 'Registrasi / Masuk'
    ]);
})->name('autentikasi');

Route::group(['prefix' => 'auth'], function() {
    // Routing ke laman Register (stakeholder)
    Route::get('/register', [RegisterController::class, 'stakeholderRegister'])->name('register');
    Route::post('/register', [RegisterController::class, 'stakeholderRegister']);
    Route::get('/regisdev',[RegisterController::class, 'developerRegister'])->name('regisdev');
    Route::post('/regisdev',[RegisterController::class, 'developerRegister']);

    Route::get('/auth',[LoginController::class,'login']);
    Route::post('/auth',[LoginController::class,'login']);
    
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





// Route::GET('/home', [App\Http\Controllers\HomeController::class, 'login'])->name('home');