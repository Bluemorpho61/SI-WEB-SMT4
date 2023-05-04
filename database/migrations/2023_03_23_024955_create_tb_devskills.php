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
            $table->integer('id_developer');
            $table->integer('id_skill');
            $table->index('id_developer','id_developer');
            $table->index('id_skill','id_skill');
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
