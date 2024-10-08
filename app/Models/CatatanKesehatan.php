<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatatanKesehatan extends Model
{
    protected $fillable = [
        'user_id', 'usia', 'tinggi_badan', 'berat_badan', 'berat_badan_ideal', 'asupan_air_harian', 'kadar_glukosa', 'kategori_glukosa',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
