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
        Schema::create('tb_devskills', function (Blueprint $table) {
            $table->id('id_devskills');
            //TODO: tambah index dari tb_developer (id_developer)
            //TODO: tambah index dari tb_skill (id_skill)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_devskills');
    }
};
