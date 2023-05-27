<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TawaranProyek extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'pengajuan_id',
        'besaran_bid',
        'created_at',
        'updated_at'
    ];
}
