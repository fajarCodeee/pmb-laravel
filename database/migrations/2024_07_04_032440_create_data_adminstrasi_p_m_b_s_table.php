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
        Schema::create('data_adminstrasi_p_m_b_s', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_administrasi', ['Pendaftaran', 'Registrasi']);
            $table->string('nama_bank');
            $table->string('no_rekening');
            $table->string('nama_pemilik');
            $table->string('jumlah_administrasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_adminstrasi_p_m_b_s');
    }
};
