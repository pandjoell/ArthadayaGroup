<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiSpesifikasi extends Model
{
    use HasFactory;

    protected $table = 'properti_spesifikasis';

    protected $fillable = [
        'properti_id',
        'key',
        'value',
    ];

    public function properti()
    {
        return $this->belongsTo(Properti::class, 'properti_id');
    }
}
