<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if (DB::table('users')->count()===0) {
            # code...
            DB::table('users')->insert([
                ['nama' => 'Slamet', 'email' => 'slametgeming@gmail.com', 'password' => Hash::make('12345678'), 'tipe_user' => '2'], //Developer
                [
                    'nama' => 'Burhan',
                    'email' => 'burhangeming@gmail.com',  //Stakeholder
                    'password' => Hash::make('12345678'),
                    'tipe_user' => '0'
                ],
                [
                    'nama' => 'Bustomi',
                    'email' => 'bustomi@gmail.com',
                    'password' => Hash::make('12345678'), //Admin
                    'tipe_user' => '1'
                ],
            ]);
        }
        




    }
}