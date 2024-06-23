<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    // relasi tabel form pendaftaran
    public function formPendaftaran()
    {
        return $this->hasMany(FormPendaftaran::class);
    }
}
