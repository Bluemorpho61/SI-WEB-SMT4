<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  public function index()
  {
    $count = User::all()->count();
    return view('adminHome', ['count' => $count]);
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

  public function showDetailAkun()
  {
    return view('pages.admin.profiluser');
  }


  public function showPengaturan()
  {
    return view('pages.admin.pengaturan');
  }
}