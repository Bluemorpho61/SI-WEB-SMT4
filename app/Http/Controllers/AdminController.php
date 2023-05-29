<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $count = User::all()->count();
        $proyek = Pengajuan::all()->count();
        return view('adminHome', ['count' => $count, 'proyek' => $proyek]);
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
        $user = User::query()->find($id);
//    dd($user);
        return view('pages.admin.profiluser', compact('user'));
    }

    public function destroyUser($id)
    {
        $user =User::query()->find($id);
        $user->delete();
        session()->flash('success','User berhasil di takedown');
        return redirect()->route('kel-user');
    }

    public function showPengaturan($id)
    {
        $user = User::query()->find($id);
        return view('pages.admin.pengaturan');
    }
}
