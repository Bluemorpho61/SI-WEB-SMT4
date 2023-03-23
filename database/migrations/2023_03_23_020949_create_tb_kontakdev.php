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
        Schema::create('tb_kontakdev', function (Blueprint $table) {
            $table->id('id_kontakdev');
            //TODO: TAMBAHIN INDEX id_users
            $table->char('laman_web',30);
            $table->string('email',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kontakdev');
    }
};
