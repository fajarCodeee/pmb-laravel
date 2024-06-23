<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;
    protected $fillable = ['value', 'name'];

    // relasi ke formPendaftaran
    public function formPendaftaran()
    {
        return $this->hasMany(FormPendaftaran::class);
    }
}
