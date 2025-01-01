<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kembali extends Model
{
    use HasFactory;
    protected $table = 'kembali';

    public function pinjam()
    {
        return $this->belongsTo(Pinjam::class, 'kode_kembali', 'kode');
    }
}
