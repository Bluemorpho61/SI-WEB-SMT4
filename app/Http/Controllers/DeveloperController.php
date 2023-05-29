<?php

namespace App\Http\Controllers;

use App\Models\Developerv;
use App\Models\KontakDev;
use App\Models\Pengajuan;
use App\Models\TawaranProyek;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class DeveloperController extends Controller
{
    public function index()
    {
        return view('devHome');
    }

    public function showCari()
    {
        $totalProyek =Pengajuan::query()->where('status_proyek','=',0)->count();
        $showProyek = Pengajuan::query()->join('users', 'pengajuans.users_id', '=', 'users.id_users')->select('pengajuans.id', 'pengajuans.nama_proyek AS proyek', 'users.nama', 'pengajuans.jangka_deadline AS tenggat')->get();
        return view('pages.developer.cariproyek', compact('showProyek','totalProyek'));
    }

    public function daftarPro()
    {
        return view('pages.developer.daftarproyek');
    }

    public function showTim($id)
    {
        $count = Developerv::query()->where('users_id', '=', $id)->count();
//        $devTeam =Developerv::query()->join('users_id','developerv.id','=',$id)->get();
        $devTeam =Developerv::all()->where('users_id','=',$id);
        if ($count <= 0) {
            return view('pages.developer.buatprofil');
        } else {
            return view('pages.developer.profiltim',compact('devTeam'));
        }
    }

    public function showProgress()
    {
        return view('pages.developer.progressproyek');
    }
    public function addDevInfo(Request $request)
    {

        if (!$request->has('image')){
            Developerv::create([
                'nama_developer' => $request['nama_developer'],
                'alamat' => $request['alamat'],
                'ikon' => 'profile.png',
                'users_id' => Auth::id()
            ]);
        }else{
           $file =$request->file('image');
           $namaFile =$file->getClientOriginalName();
           $SavePath =public_path('fileupload/Developer/devProfileIcon');
           $file->move($SavePath,$namaFile);
            Developerv::create([
                'nama_developer' => $request['nama_developer'],
                'alamat' => $request['alamat'],
                'ikon' => $namaFile,
                'users_id' => Auth::id(),
            ]);
        }
//        if ($request->hasFile('image')) {
////            $file = $request->file('image');
////            $file->store('/fileupload/Developer/devProfileIcon');
////            $namaFile = $file->getClientOriginalName();
//            $file =$request->file('image');
//            Storage::putFile('fileupload/Developer/devProfileIcon',$request->file('image'));
//            $namaFile =$file->getClientOriginalName();
//            Developerv::create([
//                'nama_developer' => $request['nama_developer'],
//                'alamat' => $request['alamat'],
//                'ikon' => $namaFile,
//                'users_id' => Auth::id(),
//            ]);
//        } else {
//            Developerv::create([
//                'nama_developer' => $request['nama_developer'],
//                'alamat' => $request['alamat'],
//                'ikon' => 'profile.png',
//                'users_id' => Auth::id()
//            ]);
//        }
        session()->flash('success', 'Profil tim developer anda telah berhasil ditambahkan');
        return redirect()->route('dev-home');
    }

    public function showDetailProyek($id)
    {
        $penawar =User::query()->join('tawaran_proyeks','users.id_users','=','tawaran_proyeks.users_id')->join('pengajuans','pengajuans.id','=','tawaran_proyeks.pengajuan_id')->select('users.id_users AS pengguna','pengajuans.id','users.nama AS nama','tawaran_proyeks.besaran_bid AS harga','tawaran_proyeks.created_at AS tanggal')->where('pengajuans.id','=',$id)->get();
        $dataProyek=Pengajuan::query()->join('users','pengajuans.users_id','=','users.id_users')->select('pengajuans.id','pengajuans.nama_proyek AS proyek','users.nama AS stakeholder','pengajuans.jangka_deadline AS deadline','pengajuans.deskripsi','pengajuans.created_at AS dibuat','pengajuans.status_proyek AS status')->where('pengajuans.id','=',$id)->get();
        return view('pages.developer.detailproyek',['penawar'=>$penawar,'dataProyek'=>$dataProyek]);
    }


    public function HapusTawaran($id)
    {
       $tawaran= TawaranProyek::query()->find($id);
       $tawaran->delete();
       session()->flash('dlt-peng','Tawaran Berhasil Dihapus');
       return redirect('/cari-proyek/detail-proyek/',$id);
    }

    public function showPengaturan($id)
    {
        $user = User::query()->findOrFail($id);
        return view('pages.developer.pengaturan', compact('user'));
    }

    public function pasangPenawaran(Request $request,$id)
    {
        TawaranProyek::create([
            'users_id'=>Auth::id(),
            'pengajuan_id'=>$id,
            'besaran_bid'=>$request['harga']
        ]);
    }
}
