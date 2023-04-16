<?php

namespace Database\Seeders;

use App\Models\tb_user_model;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tb_userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        tb_user_model::create([
            'nama'=>'John Doe',
            'email'=>'jon@gemail.com',
            'password'=>'coy123'
        ]);
    }
}
