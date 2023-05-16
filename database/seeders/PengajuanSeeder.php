<?php

namespace Database\Seeders;

use App\Enums\RoleList;
use App\Models\Pengajuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $pengajuan = [
            [
                'nama_proyek' => 'Point of Sale',
                'jangka_deadline' => now()->toDate(),
                'deskripsi' => 'lorem ipsum dolor'
            ],
            [
                'nama_proyek' => 'Aplikasi Kasir',
                'jangka_deadline' => now()->toDate(),
                'deskripsi' => 'lorem ipsum dolor'
            ],
            [
                'nama_proyek' => 'Profile Perusahaan',
                'jangka_deadline' => now()->toDate(),
                'deskripsi' => 'lorem ipsum dolor'
            ]
        ];

       DB::table('pengajuans')->insert([
        [
            'nama_proyek' => 'Point of Sale',
            'jangka_deadline' => now()->toDate(),
            'users_id'=>2,
            'deskripsi' => 'lorem ipsum dolor'
        ],
        [
            'nama_proyek' => 'Aplikasi Kasir',
            'jangka_deadline' => now()->toDate(),
            'users_id'=>2,
            'deskripsi' => 'lorem ipsum dolor'
        ],
        [
            'nama_proyek' => 'Profile Perusahaan',
            'jangka_deadline' => now()->toDate(),
            'users_id'=>2,
            'deskripsi' => 'lorem ipsum dolor'
        ]
       ]);


        // Pengajuan::create([
        //     'nama_proyek'=>'Point of Sale',
        //     ''
        // ]);
    }
}