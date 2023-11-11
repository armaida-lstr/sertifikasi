<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motor extends Model
{
    protected $fillable = ['ukuran_bagasi', 'kapasitas_bensin'];

    public function kendaraanku()
    {
        return $this->morphOne(Kendaraan::class, 'kendaraanku');
    }

    use HasFactory;
}
