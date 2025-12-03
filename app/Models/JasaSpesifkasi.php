<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JasaSpesifkasi extends Model
{
    protected $fillable = ['key', 'value'];

    public function jasa()
    {
        return $this->belongsTo(Jasa::class);
    }
}
