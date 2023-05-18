<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  public function index()
  {
    $count = User::all()->count();
    $proyek =Pengajuan::all()->count();
    return view('adminHome', ['count' => $count,'proyek'=>$proyek]);
  }

  public function showKelolaUser()
  {
    $user = User::all();
    return view('pages.admin.kelolauser', ['user' => $user]);
  }
  public function showLihatSemua()
  {
    return view('pages.admin.lihataduan');
  }

  public function showTelusurProyek()
  {
    return view('pages.admin.telusuriproyek');
  }

  public function telusuriTim()
  {
    return view('pages.admin.telusuritim');
  }

  public function showDetailAkun($id)
  {
    $user =User::query()->find($id);
//    dd($user);
    return view('pages.admin.profiluser',compact('user'));
  }


  public function showPengaturan($id)
  {
      $user =User::query()->find($id);
      dd($user);
    return view('pages.admin.pengaturan');
  }
}
