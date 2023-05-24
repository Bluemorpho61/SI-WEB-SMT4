<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;



    protected $fillable =[
        'nama_proyek',
        'jangka_deadline',
        'deskripsi',
        'users_id',
        'status_proyek'
    ];

protected $casts =[
'created_at'=>'datetime'
];

}
