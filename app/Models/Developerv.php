<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developerv extends Model
{
    use HasFactory;

    
    protected $table ='Developer';
    protected $primaryKey ='id_developer';
}