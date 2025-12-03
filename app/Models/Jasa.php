<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    protected $fillable = ['nama', 'deskripsi', 'harga', 'created_by'];

    public function kategoris()
    {
        return $this->belongsToMany(
            Kategori::class,
            'kategori_jasas',
            'jasa_id',
            'kategori_id'
        )->withTimestamps();
    }

    public function spesifikasis()
    {
        return $this->hasMany(JasaSpesifkasi::class, 'jasa_id');
    }
}
