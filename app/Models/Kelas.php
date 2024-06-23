<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaKelas',
        'waktu'
    ];

    public function formPendaftaran()
    {
        return $this->hasMany(FormPendaftaran::class);
    }

    public function mahasiswaBaru()
    {
        return $this->hasMany(MahasiswaBaru::class);
    }
}
