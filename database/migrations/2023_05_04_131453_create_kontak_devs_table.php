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
        Schema::create('kontak_devs', function (Blueprint $table) {
            $table->id();
            $table->string('laman_web');
            // $table->unsignedBigInteger('developer_id');
            // $table->foreign('developer_id')->references('id')->on('developervs');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontak_devs');
    }
};
