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
        Schema::create('tb_lampiran', function (Blueprint $table) {
            $table->id('id_lampiran');
            //TODO: tambah index dari tb_pengajuan_proyek (id_pengajuan)
            $table->string('lampiran',45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_lampiran');
    }
};
