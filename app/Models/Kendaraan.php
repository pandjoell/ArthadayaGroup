<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'created_by',
    ];

    public function kategoris()
    {
        return $this->belongsToMany(
            Kategori::class,
            'kategori_kendaraans',
            'kendaraan_id',
            'kategori_id'
        )->withTimestamps();
    }

    public function spesifikasis()
    {
        return $this->hasMany(KendaraanSpesifkasi::class, 'kendaraan_id');
    }
}
