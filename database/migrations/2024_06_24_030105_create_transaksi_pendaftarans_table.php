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
        Schema::create('transaksi_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('form_id')->references('id')->on('form_pendaftarans')->onDelete('cascade');
            $table->string('nama_cmb');
            $table->string('bukti_tf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_pendaftarans');
    }
};
