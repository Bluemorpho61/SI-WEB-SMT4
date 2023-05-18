<?php

namespace App\Http\Controllers;

use App\Enums\ProjectStatus;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StakeholderController extends Controller
{
      public function index()
      {
            $proyekYangAd = DB::table('pengajuans')->where('users_id', Auth::user()->id_users)->count();
            $proyekYangSel = DB::table('pengajuans')->where('status_proyek', ProjectStatus::SELESAI)->count();
            $proyekYangMen = DB::table('pengajuans')->where('status_proyek', ProjectStatus::MENUNGGU_TAWARAN)->count();
            return view('home', ['proyekYangAd' => $proyekYangAd, 'proyekYangSel' => $proyekYangSel, 'proyekYangMen' => $proyekYangMen]);
      }
      public function showDaftarProy()
      {
            $show = DB::table('pengajuans')->select('nama_proyek', 'jangka_deadline')->where('users_id', Auth::user()->id_users)->get();
            $count = $show->count();
            return view('pages.stakeholder.daftarproyek', ['show' => $show, 'count' => $count]);
      }

      public function DetailProyek($id)
      {
            $pengajuan = DB::table('pengajuans')->find($id);
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
      public function showPengaturan()
      {
            return view('pages.stakeholder.pengaturan');
      }

        public function createProject(){
        
        }
      public function create(Request $data, ProjectStatus $projectStatus)
      {
            return Pengajuan::create([
            'nama_proyek'=>$data['nama_proyek'],
            'deskripsi'=>$data['deskripsi'],
            'jangka_deadline'=>$data['jangka_deadline'],
            'users_id'=>$projectStatus
            ]);
      }
}