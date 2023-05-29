<?php

namespace App\Http\Controllers;

use App\Enums\ProjectStatus;
use App\Models\Pengajuan;
use App\Models\TawaranProyek;
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
        $proyekYangSel = Pengajuan::query()->where('status_proyek', '=', ProjectStatus::SELESAI)->where('users_id', '=', Auth::id())->count();
        $proyekYangMen = Pengajuan::query()->where('status_proyek', '=', ProjectStatus::MENUNGGU_TAWARAN)->where('users_id', '=', Auth::id())->count();
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
        $show = DB::table('pengajuans')->select('id', 'nama_proyek','status_proyek' ,'jangka_deadline')->where('users_id', Auth::user()->id_users)->get();
        $count = $show->count();
        return view('pages.stakeholder.daftarproyek', ['show' => $show, 'count' => $count]);
    }

    public function destroyProyek($id)
    {
        $pengajuan = Pengajuan::query()->findOrFail($id);
        $pengajuan->delete();
        session()->flash('dlt-pry', 'Pengajuan proyek berhasil dibatalkan');
        return redirect()->route('dafpro-stake');
    }

    public function DetailProyek($id)
    {
        $pengajuan = Pengajuan::query()->findOrFail($id);
//        $tawaran =TawaranProyek::query()->join('pengajuans','tawaran_proyeks.pengajuan_id','=','pengajuans.id')->join('users','pengajuans.users_id','=','users.id_users')->select('pengajuans.id','users.nama AS nama','tawaran_proyeks.besaran_bid AS harga','tawaran_proyeks.created_at')->where('pengajuans.id','=',$id)->get();
        $tawaran =User::query()->join('tawaran_proyeks','users.id_users','=','tawaran_proyeks.users_id')->join('pengajuans','pengajuans.id','=','tawaran_proyeks.pengajuan_id')->select('pengajuans.id','users.id_users AS id_user','users.nama AS nama','tawaran_proyeks.besaran_bid AS harga','tawaran_proyeks.created_at')->get();
        return view('pages.stakeholder.detailinfoproyek', ['pengajuan' => $pengajuan,'tawaran'=>$tawaran]);
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
        return view('pages.stakeholder.pengaturan', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $dataUpdate = User::query()->findOrFail(Auth::id());
        if (!empty($request->input('nama'))) {
            $dataUpdate->nama = $request->input('nama');
        }
        if (!empty($request->input('password'))) {
            $dataUpdate->password = Hash::make($request->input('password'));
        }
        if (!empty($request->input('no_hp'))) {
            $dataUpdate->no_hp = $request->input('no_hp');
        }
        $dataUpdate->setUpdatedAt(now());
        $dataUpdate->save();
        $request->session()->flash('success', 'Data Profil Berhasil diubah');
        return back();
    }

    public function showPenawaran($id)
    {
        $penawaran = TawaranProyek::query()->join('users', 'tawaran_proyeks.users_id', '=', 'users.id_users')->join('pengajuans','tawaran_proyeks.pengajuan_id','=','pengajuans.id') ->join('developervs', 'users.id_users', '=', 'developervs.users_id')->select('pengajuans.id','developervs.id AS id', 'tawaran_proyeks.besaran_bid AS besaran', 'tawaran_proyeks.created_at AS tgl')->where('pengajuans.id','=',$id);

    }

    public function showProfilPenawar($id)
    {
        $profil =User::query()->join('developervs','users.id_users','=','developervs.users_id')->select('developervs.id', 'developervs.nama_developer AS nama','developervs.alamat','developervs.ikon','developervs.status','developervs.created_at')->where('users.id_users','=',$id)->get();
        return view('pages.stakeholder.cekprofil',compact('profil'));
    }

    public function updatePengajuan(Request $request,$id)
    {
        $dataUpdate =Pengajuan::query()->findOrFail($id);
        if (!empty($request->input('nama_proyek'))){
            $dataUpdate->nama_proyek =$request->input('nama_proyek');
        }
        if (!empty($request->input('deskripsi'))){
            $dataUpdate->deskripsi =$request->input('deskripsi');
        }
        if (!empty($request->input('jangka_deadline'))){
            $dataUpdate->jangka_deadline =$request->input('jangka_deadline');
        }
        $dataUpdate->setUpdatedAt(now());
        $dataUpdate->save();
        $request->session()->flash('up-peng','Data pengajuan proyek telah berhasil diubah');
        return back();
    }

    public function AmbilTawaran($id)
    {
        $dataProyek =Pengajuan::query()->findOrFail($id);
        $tawaran =TawaranProyek::query()->join('pengajuans','tawaran_proyeks.pengajuan_id','=','pengajuans.id')->select('pengajuans.id','tawaran_proyeks.nama_proyek');
        $dataProyek->where('id',$id)->update(['status_proyek'=>1]);
        $tawaran->where('pengajuans.id',$id)->delete();

        return redirect()->route('dafpro-stake');
    }

}
