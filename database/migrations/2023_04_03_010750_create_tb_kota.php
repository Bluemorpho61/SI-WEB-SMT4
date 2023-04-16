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
        Schema::create('tb_kota', function (Blueprint $table) {
            $table->id('id_kota');
            $table->integer('id_provinsi');
            $table->index('id_provinsi','id_provinsi');
            $table->string('kota');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kota');
    }
};
