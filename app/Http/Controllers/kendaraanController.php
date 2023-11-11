<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use App\Models\mobil;
use App\Models\motor;
use App\Models\truck;
use Illuminate\Http\Request;

class kendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::all();

        $mobil = [];
        $motor = [];
        $truck = [];

        foreach ($kendaraans as $kendaraan) {
            switch ($kendaraan->jenis) {
                case 'mobil':
                    $mobil[] = $kendaraan;
                    break;
                case 'motor':
                    $motor[] = $kendaraan;
                    break;
                case 'truck':
                    $truck[] = $kendaraan;
                    break;
            }
        }

        return view('kendaraans.tampilkend')
            ->with('kendaraans', $kendaraans)
            ->with('mobil', $mobil)
            ->with('motor', $motor)
            ->with('truck', $truck);
    }

    public function create()
    {
        return view('kendaraans.tambahkend');
    }

    public function store(Request $request)
{
    $input = $request->all();

    // Validate and create common fields
    $kendaraan = Kendaraan::create($request->only([
        'jenis', 'model', 'tahun', 'jml_kursi', 'manufaktur',
        'harga', 'tipe_bahan_bakar', 'luas_bagasi', 'ukuran_bagasi',
        'kapasitas_bensin', 'jml_roda_ban', 'luas_area_kargo',
    ]));

    // Create type-specific fields based on 'jenis'
    if ($request->has('jenis')) {
        $jenis = $request->jenis;
        switch ($jenis) {
            case 'mobil':
                $mobilData = [
                    'tipe_bahan_bakar' => $input['tipe_bahan_bakar'],
                    'luas_bagasi' => $input['luas_bagasi'],
                ];
                $kendaraan->mobil()->create($mobilData);
                break;
            case 'motor':
                $motorData = [
                    'ukuran_bagasi' => $input['ukuran_bagasi'],
                    'kapasitas_bensin' => $input['kapasitas_bensin'],
                ];
                $kendaraan->motor()->create($motorData);
                break;
            case 'truck':
                $truckData = [
                    'jml_roda_ban' => $input['jml_roda_ban'],
                    'luas_area_kargo' => $input['luas_area_kargo'],
                ];
                $kendaraan->truck()->create($truckData);
                break;
            // Add more cases for other types if needed
        }
    }

    return redirect('kendaraan')->with('flash_message', 'Kendaraan Added!');
}



    public function show($id)
    {
        $kendaraan = Kendaraan::find($id);
        return view('kendaraans.showkend')->with('kendaraans', $kendaraan);
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::find($id);
        return view('kendaraans.editkend', [
            'kendaraans' => $kendaraan,
        ]);
    }

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::find($id);
    
        // Validate and update common fields
        $kendaraan->update($request->only([
            'jenis', 'model', 'tahun', 'jml_kursi', 'manufaktur',
            'harga', 'tipe_bahan_bakar', 'luas_bagasi', 'ukuran_bagasi',
            'kapasitas_bensin', 'jml_roda_ban', 'luas_area_kargo',
        ]));
    
        // Update type-specific fields based on 'jenis'
        if ($request->has('jenis')) {
            $jenis = $request->jenis;
            switch ($jenis) {
                case 'mobil':
                    $kendaraan->mobil->update($request->only(['tipe_bahan_bakar', 'luas_bagasi']));
                    break;
                case 'motor':
                    $kendaraan->motor->update($request->only(['ukuran_bagasi', 'kapasitas_bensin']));
                    break;
                case 'truck':
                    $kendaraan->truck->update($request->only(['jml_roda_ban', 'luas_area_kargo']));
                    break;
                // Add more cases for other types if needed
            }
        }
    
        return redirect('kendaraan')->with('flash_message', 'Kendaraan Updated!');
    }
    
    
    public function destroy($id)
    {
        $kendaraan = Kendaraan::find($id);
    
        if (!$kendaraan) {
            return redirect('kendaraan')->with('error', 'Kendaraan not found!');
        }
    
        // Sekarang baru hapus baris induk (kendaraan)
        $kendaraan->delete();
    
        return redirect('kendaraan')->with('flash_message', 'Kendaraan deleted!');
    }
    
}