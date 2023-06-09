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
        Schema::create('developervs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_developer');
            $table->mediumText('alamat');
            $table->string('ikon');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id_users')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developervs');
    }
};
