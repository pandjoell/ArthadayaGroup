<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KendaraanSpesifkasi extends Model
{
    protected $fillable = ['key', 'value'];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
