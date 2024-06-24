<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_id',
        'nama_cmb',
        'bukti_tf'
    ];

    public function formPendaftaran()
    {
        return $this->belongsTo(FormPendaftaran::class);
    }
}
