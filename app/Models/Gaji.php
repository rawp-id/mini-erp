<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->no_kode = 'GAJI-' . strtoupper(uniqid());
        });
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
