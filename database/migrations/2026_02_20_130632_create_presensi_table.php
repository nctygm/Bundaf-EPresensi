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
        Schema::create('presensi', function (Blueprint $table) {
            $table->string('id', 11);
            $table->string('nik', 15);
            $table->date('tgl_presensi');
            $table->time('jam_masuk');
            $table->time('jam_keluar');
            $table->string('foto_masuk')->nullable();
            $table->string('foto_keluar')->nullable();
            $table->text('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi');
    }
};
