<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pengajuan_proyek', function (Blueprint $table) {
            $table->id('id_pengajuan');
            //TODO: Tambah index dri tb akun (id_akun)
            $table->integer('id_users');
            $table->index(['id_users'],'id_users');
            $table->string('nama_proyek',45);
            $table->integer('perkiraan_anggaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengajuan_proyek');
    }
};
