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
        Schema::create('tb_project', function (Blueprint $table) {
            $table->id('id_project');
            $table->string('nama_project');
            //TODO: tambah index dari tb_developer (id_developer)
            $table->integer('id_developer');
            $table->index(['id_developer'],'id_developer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_project');
    }
};
