<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'alamat',
        'latitude',
        'longitude',
        'created_by',
    ];

    // Many-to-Many: kategori_propertis
    public function kategoris()
    {
        return $this->belongsToMany(
            Kategori::class,
            'kategori_propertis',
            'properti_id',
            'kategori_id'
        )->withTimestamps();
    }

    // One-to-Many: spesifikasi properti
    public function spesifikasis()
    {
        return $this->hasMany(PropertiSpesifikasi::class, 'properti_id');
    }
}
