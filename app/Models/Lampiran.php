<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class Lampiran extends Model
{
    use HasFactory;
    protected $primaryKey ='id_lampiran';

      public function simpanData(Request $request){
      }
}
