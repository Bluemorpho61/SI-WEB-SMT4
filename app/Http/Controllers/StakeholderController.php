<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StakeholderController extends Controller
{
      public function index()
      {
            return view('home');
      }
      public function showDaftarProy()
      {
            $show =DB::table('pengajuans')->select('nama_proyek','jangka_deadline')->where('users_id',Auth::user()->id_users)->get();
            $count =$show->count();
            return view('pages.stakeholder.daftarproyek',['show'=>$show,'count'=>$count]);
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
}