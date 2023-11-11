<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    protected $table = 'kendaraans';
    protected $primaryKey = 'id_kendaraan';
    protected $fillable = ['jenis', 'model', 'tahun', 'jml_kursi', 'manufaktur', 'harga'];

    public function kendaraanku()
    {
        return $this->morphTo();
    }

    public function mobil()
    {
        return $this->hasOne(Mobil::class, 'kendaraanku_id');
    }

    public function motor()
    {
        return $this->hasOne(Motor::class, 'kendaraanku_id');
    }

    public function truck()
    {
        return $this->hasOne(Truck::class, 'kendaraanku_id');
    }

    use HasFactory;
}