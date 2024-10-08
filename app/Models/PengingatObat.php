<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengingatObat extends Model
{
    protected $fillable = [
        'user_id', 'nama_obat', 'jumlah_obat', 'waktu_makan_obat', 'sebelum_sesudah_makan', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
