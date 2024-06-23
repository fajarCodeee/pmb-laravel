<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaProdi',
        'kodeProdi',
        'gelar'
    ];

    public function formPendaftaran()
    {
        return $this->hasMany(FormPendaftaran::class, 'prodi_id');
    }

    public function mahasiswaBaru()
    {
        return $this->hasMany(MahasiswaBaru::class);
    }
}
