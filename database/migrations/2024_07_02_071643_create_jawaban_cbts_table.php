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
        Schema::create('jawaban_cbts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('soal_cbt_id');
            $table->string('jawaban');
            $table->boolean('is_correct');
            $table->timestamps();

            $table->foreign('soal_cbt_id')->references('id')->on('soal_cbts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban_cbts');
    }
};
