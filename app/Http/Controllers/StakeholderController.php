<?php

namespace App\Http\Controllers;

use App\Enums\ProjectStatus;
use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StakeholderController extends Controller
{
    public function index()
    {
        $proyekYangAd = DB::table('pengajuans')->where('users_id', Auth::id())->count();
        $proyekYangSel = DB::table('pengajuans')->where('status_proyek', ProjectStatus::SELESAI)->count();
        $proyekYangMen = DB::table('pengajuans')->where('status_proyek', ProjectStatus::MENUNGGU_TAWARAN)->count();
        return view('home', ['proyekYangAd' => $proyekYangAd, 'proyekYangSel' => $proyekYangSel, 'proyekYangMen' => $proyekYangMen]);
    }

    public function postProyek(Request $request)
    {
        Pengajuan::create([
            'nama_proyek' => $request['nama_proyek'],
            'deskripsi' => $request['deskripsi'],
            'jangka_deadline' => $request['jangka_deadline'],
            'users_id' => Auth::id(),
            'status_proyek' => 0
        ]);
        return redirect()->route('dafpro-stake')->with(['success' => 'Proyek Berhasil ditambahkan']);
    }

    public function showDaftarProy()
    {
        $show = DB::table('pengajuans')->select('id','nama_proyek', 'jangka_deadline')->where('users_id', Auth::user()->id_users)->get();
        $count = $show->count();
        return view('pages.stakeholder.daftarproyek', ['show' => $show, 'count' => $count]);
    }

    public function DetailProyek($id)
    {
        $pengajuan = Pengajuan::query()->findOrFail($id);
        return view('pages.stakeholder.detailinfoproyek', ['pengajuan' => $pengajuan]);
    }

    public function showKotakMasuk()
    {
        return view('pages.stakeholder.kotakmasuk');
    }

    public function buatProyek()
    {

        return view('pages.stakeholder.buatproyek');
    }

    public function showPengaturan($id)
    {
        $user = User::query()->findOrFail($id);
//        dd($user);
        return view('pages.stakeholder.pengaturan', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $dataUpdate =User::query()->findOrFail(Auth::id());
        if (!empty($request->input('nama'))){
        $dataUpdate->nama =$request->input('nama');
        }
        if (!empty($request->input('password'))){
            $dataUpdate->password =Hash::make($request->input('password'));
        }
        if (!empty($request->input('no_hp'))){
            $dataUpdate->no_hp =$request->input('no_hp');
        }
        $dataUpdate->setUpdatedAt(now());
        $dataUpdate->save();
        $request->session()->flash('success', 'Data Profil Berhasil diubah');
        return back();
    }


}
