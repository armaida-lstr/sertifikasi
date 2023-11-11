<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $fillable = ['tipe_bahan_bakar', 'luas_bagasi'];

    public function Kendaraan()
    {
        return $this->morphOne(kendaraan::class, 'kendaraanku');
    }
    use HasFactory;
}
