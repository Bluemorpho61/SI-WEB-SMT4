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
        Schema::create('tb_req_skill', function (Blueprint $table) {
            $table->id('id_req_skill');
            //TODO: buat index dari tb_pengajuan (id_pengajuan)
            $table->integer('id_pengajuan');
            $table->integer('id_skill');
            $table->index('id_pengajuan','id_pengajuan');
            $table->index('id_skill','id_skill');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_req_skill');
    }
};
