<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developerv extends Model
{
    use HasFactory;
protected $fillable =[
    'nama_developer',
    'alamat',
    'ikon',
    'users_id',
    'status'
];
}
