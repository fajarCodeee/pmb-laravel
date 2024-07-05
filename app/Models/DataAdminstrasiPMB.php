<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAdminstrasiPMB extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_administrasi',
        'nama_bank',
        'no_rekening',
        'nama_pemilik',
        'jumlah_administrasi'
    ];
}
