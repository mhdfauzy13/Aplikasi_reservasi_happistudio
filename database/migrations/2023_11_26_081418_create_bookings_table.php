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
            $table->unsignedBigInteger('pakets_id');
            $table->string('kategori');
            $table->string('tambahan_orang')->nullable();
            $table->date('tanggal_booking');
            $table->string('waktu_booking');
            $table->string('jumlah_hewan_peliharaan')->nullable();
            $table->string('warna_backdrop');
            $table->enum('payment_status', ['unpaid', 'paid']);
            $table->boolean('upload_sosial_media');
            // $table->string('snap_token')->nullable();
            $table->timestamps();
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');
            $table
                ->foreign('pakets_id')
                ->references('id')
                ->on('pakets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table
                ->foreign('pakets_id')
                ->references('id')
                ->on('pakets')
                ->onDelete('cascade');
        });

        Schema::dropIfExists('bookings');
    }
};
