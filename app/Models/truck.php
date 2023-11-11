<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truck extends Model
{

    protected $fillable = ['jml_roda_ban', 'luas_area_kargo'];

    public function Kendaraan()
    {
        return $this->morphOne(kendaraan::class, 'kendaraanku');
    }
    use HasFactory;
}
