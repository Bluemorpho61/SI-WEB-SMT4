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
                ['nama' => 'Cahaya Technology', 'email' => 'developer@gmail.com', 'password' => Hash::make('12345678'), 'tipe_user' => '2'], //Developer
                [
                    'nama' => 'PT Anugerah',
                    'email' => 'stakeholder@gmail.com',  //Stakeholder
                    'password' => Hash::make('12345678'),
                    'tipe_user' => '0'
                ],
                [
                    'nama' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('12345678'), //Admin
                    'tipe_user' => '1'
                ],
            ]);
        }





    }
}
