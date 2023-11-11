<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{

    
    protected $table = 'transaksis'; 
    protected $primaryKey = 'id_transaksi';  
    protected $fillable = ['id_customer', 'id_kendaraan'];

    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'id_kendaraan', 'id_kendaraan');
    }
}

