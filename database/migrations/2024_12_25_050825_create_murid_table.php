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
        Schema::create('murid', function (Blueprint $table) {
            $table->id();
            $table->string('nama_murid');
            $table->unsignedBigInteger('id_kelas');
            $table->unsignedBigInteger('id_guru');

            $table->timestamps();

            $table->foreign('id_kelas')->references('id')->on('kelas');
            $table->foreign('id_guru')->references('id')->on('guru');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murid');
    }
};
