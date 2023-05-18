<?php

use App\Enums\RoleList;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StakeholderController;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Foundation\Auth\User;
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

// Route::group(['middleware'=>'guest'],function(){
//     Route::get('/',[HomeController::class,'keLogin'])->name('login');
//     Route::post('/',[HomeController::class,'login']);
// });

Route::post('/logout', [HomeController::class, 'logout'])->name('logout');






// Routing untuk admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/kelola-user', [AdminController::class, 'showKelolaUser'])->name('kel-user');
    Route::get('/lihat-proyek', [AdminController::class, 'showLihatSemua'])->name('lihat');
    Route::get('/pengaturan', [AdminController::class, 'showPengaturan'])->name('peng-adm');
    Route::get('/telusuri-proyek', [AdminController::class, 'showTelusurProyek'])->name('tel-proyek');
    Route::get('/telusuri-dev', [AdminController::class, 'telusuriTim'])->name('tel-tim');
    Route::get('/detail-akun',[AdminController::class,'showDetailAkun'])->name('det-ak');
    Route::get('/delete-user',[AdminController::class,'deleteRowUser']);
});

// Routing untuk developer
Route::group(['prefix' => 'dev'], function () {
    Route::get('/cari-proyek', [DeveloperController::class, 'showCari'])->name('car-pro');
    Route::get('/daftar-proyek', [DeveloperController::class, 'daftarPro'])->name('daf-pro');
    Route::get('/profil-tim', [DeveloperController::class, 'showTim'])->name('show-tim');

});

// Routing untuk Stakeholder
Route::group(['prefix' => 'stake'], function () {
    Route::get('/daftar-proyek', [StakeholderController::class, 'showDaftarProy'])->name('dafpro-stake');
    Route::get('/kotak-masuk', [StakeholderController::class, 'showKotakMasuk'])->name('kotak-m');
    Route::get('/buat-proyek', [StakeholderController::class, 'buatProyek'])->name('buat-pro');
    Route::get('/pengaturan', [StakeholderController::class,'showPengaturan'])->name('peng-stake');
    Route::get('/detail-proyek/{id}',[StakeholderController::class,'DetailProyek']);
    Route::post('/buat-proyek/unggah',[]);
});



Route::get('/admin', [AdminController::class, 'index'])->name('admin-home');
Route::get('/dev', [DeveloperController::class, 'index'])->name('dev-home');
Route::get('/stake', [StakeholderController::class, 'index'])->name('stake-home');



Route::get('/auth', function () {
    return view('auth.login', [
        'hal' => 'Registrasi / Masuk'
    ]);
})->name('autentikasi');

Route::group(['prefix' => 'auth'], function () {
    // Routing ke laman Register (stakeholder)
    Route::get('/register', [RegisterController::class, 'stakeholderRegister'])->name('register');
    Route::post('/register', [RegisterController::class, 'stakeholderRegister']);
    Route::get('/regisdev', [RegisterController::class, 'developerRegister'])->name('regisdev');
    Route::post('/regisdev', [RegisterController::class, 'developerRegister']);

    Route::post('/login', [LoginController::class, 'login'])->name('login');

    // Route::get('/auth',[LoginController::class,'login']);
    // Route::post('/auth',[LoginController::class,'login']);

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
Route::get('/testing/dev', function () {
    return view('devHome');
})->setUri('tesdev.dashboard');

Route::get('/testing/admin', function () {
    return view('adminHome');
})->setUri('tesadm.dashboard');





// Route::GET('/home', [App\Http\Controllers\HomeController::class, 'login'])->name('home');