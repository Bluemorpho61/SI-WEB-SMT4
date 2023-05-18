<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pengajuan';
    protected $fillable =[
        'nama_proyek',
        'jangka_deadline',
        'deskripsi',
        'users_id',
        'status_proyek'
    ];

}
