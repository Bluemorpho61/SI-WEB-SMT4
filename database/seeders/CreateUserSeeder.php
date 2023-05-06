<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


            # code...
            User::create([
                [
                    'nama'=>'Firdaus Al Kindi',
                    'email'=>'vanda10.dava@gmail.com',
                    'password'=>'12345678',
                    'tipe_user'=>'0'
                ]
                ,
                [
                    'nama'=>'Cok Nggatheli',
                    'email'=>'lilkanjut@gmail.com',
                    'password'=>'12345678',
                    'tipe_user'=>'1'
                ]
                ,
                [
                    'nama'=>'Cok Nggatheli',
                    'email'=>'lilkanjut@gmail.com',
                    'password'=>'12345678',
                    'tipe_user'=>'1'
                ]
            ]
            );
    }
}
