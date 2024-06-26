<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FormPendaftaran extends Model
{
    use HasFactory;

    protected $keyTable = 'string';

    public $incrementing = false;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    // relasi dengan tabel kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    // relasi tabel prodi
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    public function transaksiPendaftaran()
    {
        return $this->hasOne(TransaksiPendaftaran::class);
    }
}
