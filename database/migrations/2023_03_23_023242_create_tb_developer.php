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
        Schema::create('tb_developer', function (Blueprint $table) {
            $table->id('id_developer');
            $table->string('nama_developer',30);
            //TODO: tambah index dr tb_akun (id_akun)
            $table->integer('id_users');
            $table->index(['id_users'],'id_users');
            $table->mediumText('alamat');
            $table->string('ikon');
            $table->enum('status',['siap menerima proyek','belum tersedia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_developer');
    }
};
