<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            // $table->string('nama_lengkap');
            // $table->string('email');
            $table->id();
            $table->string('no_whatsaap');
            $table->unsignedBigInteger('user_id');
            $table->date('tanggal_booking');
            $table->string('waktu_booking');
            $table->string('jumlah_hewan_peliharaan');
            $table->string('warna_backdrop');
            $table->boolean('upload_sosial_media');
            $table->string('snap_token')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
