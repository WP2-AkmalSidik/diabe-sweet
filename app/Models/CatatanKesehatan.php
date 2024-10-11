<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

// Pastikan menggunakan namespace yang benar

class CatatanKesehatan extends Model
{
    protected $table = 'catatan_kesehatan';

    protected $fillable = [
        'user_id',
        'umur',
        'tinggi',
        'berat',
        'sistolik',
        'diastolik',
        'gula',
        'kategori',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}