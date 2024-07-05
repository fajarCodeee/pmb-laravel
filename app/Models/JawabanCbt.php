<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanCbt extends Model
{
    use HasFactory;

    protected $fillable = ['id_soal_cbt', 'jawaban', 'is_correct'];

    public function soalCbt()
    {
        return $this->belongsTo(SoalCbt::class);
    }
}
