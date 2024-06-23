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
        Schema::create('mahasiswa_barus', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // $table->string('users_id');
            $table->foreignId('prodi_id')->constrained('prodis')->onDelete('cascade');
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
            $table->bigInteger('nim');
            $table->string('namaLengkap');
            $table->string('tempatLahir');
            $table->string('tanggalLahir');
            $table->string('jenisKelamin');
            $table->string('agama');
            $table->string('nomerWhatsapp');
            $table->string('email');
            $table->string('nik');
            $table->string('nisn');
            $table->string('npwp')->nullable();
            $table->string('kewarganegaraan');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('dusun');
            $table->string('rt');
            $table->string('rw');
            $table->string('jalan');
            $table->string('kodePos');
            $table->string('jenisTinggal');
            $table->string('alatTransportasi')->nullable();
            $table->string('telpRumah')->nullable();
            $table->string('nikAyah');
            $table->string('namaAyah');
            $table->string('tempatLahirAyah');
            $table->string('tanggalLahirAyah');
            $table->string('pendidikanAyah');
            $table->string('pekerjaanAyah');
            $table->string('penghasilanAyah');
            $table->string('nikIbu');
            $table->string('namaIbu');
            $table->string('tempatLahirIbu');
            $table->string('tanggalLahirIbu');
            $table->string('pendidikanIbu');
            $table->string('pekerjaanIbu');
            $table->string('penghasilanIbu');
            $table->string('namaWali')->nullable();
            $table->string('tempatLahirWali')->nullable();
            $table->string('tanggalLahirWali')->nullable();
            $table->string('pendidikanWali')->nullable();
            $table->string('pekerjaanWali')->nullable();
            $table->string('penghasilanWali')->nullable();
            $table->string('kk');
            $table->string('ktp');
            $table->string('ijazah');
            $table->string('foto');
            $table->string('akte');
            $table->enum('status', ['0', '1', '-1'])->default('0'); // 0 -> menunggu konfirmasi; 1 -> diterima; -1 -> ditolak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_barus');
    }
};
