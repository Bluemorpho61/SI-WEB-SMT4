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
        Schema::create('tawaran_proyeks', function (Blueprint $table) {
            $table->id();
            // $table->
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('pengajuan_id');
            $table->integer('besaran_bid');
            $table->foreign('pengajuan_id')->references('id')->on('pengajuans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('users_id')->references('id_users')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tawaran_proyeks');
    }
};
