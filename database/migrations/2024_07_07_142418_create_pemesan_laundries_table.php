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
        Schema::create('pemesan_laundries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('kategori_paket_kiloans_id')->nullable();
            $table->foreign('kategori_paket_kiloans_id')->references('id')->on('kategori_paket_kiloans');
            $table->enum('jenis_paket', ['paket_kiloan', 'paket_satuan'])->nullable();
            $table->enum('jenis_pembayaran', ['cash', 'transfer'])->nullable();
            $table->enum('jenis_pengambilan_cucian', ['ditempat', 'diantar'])->nullable();
            $table->enum('status_pesanan', ['boking_pemesanan_cucian_dulu', 'tidak_boking_pemesanan_cucian'])->nullable();
            $table->enum('status_pembayaran', ['belum_bayar', 'sudah_bayar'])->nullable();
            $table->enum('status_pesanan_laundry', ['sedang_dikerjakan', 'selesai'])->default('sedang_dikerjakan')->nullable();
            $table->string('total_pembayaran')->nullable();
            $table->text('keterangan_pemesanan')->nullable();
            $table->string('timbang_berat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesan_laundries');
    }
};
