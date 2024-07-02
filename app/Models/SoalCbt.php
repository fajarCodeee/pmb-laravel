<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalCbt extends Model
{
    use HasFactory;

    protected $fillable = ['isi_soal'];

    public function jawabanCbt()
    {
        return $this->hasMany(JawabanCbt::class);
    }
}
