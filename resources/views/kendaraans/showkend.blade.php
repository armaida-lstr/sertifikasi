@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">Detail Kendaraan</div>
        <div class="card-body">
            <p class="card-text">ID Kendaraan: {{ $kendaraans->id_kendaraan }}</p>
            <p class="card-text">Jenis: {{ $kendaraans->jenis }}</p>
            <p class="card-text">Model: {{ $kendaraans->model }}</p>
            <p class="card-text">Tahun: {{ $kendaraans->tahun }}</p>
            <p class="card-text">Jumlah Penumpang: {{ $kendaraans->jml_kursi }}</p>
            <p class="card-text">Manufaktur: {{ $kendaraans->manufaktur }}</p>
            <p class="card-text">Harga: {{ $kendaraans->harga }}</p>

            @if($kendaraans->jenis === 'mobil')
                <p class="card-text">Tipe Bahan Bakar: {{ $kendaraans->mobil->tipe_bahan_bakar }}</p>
                <p class="card-text">Luas Bagasi: {{ $kendaraans->mobil->luas_bagasi }}</p>
            @elseif($kendaraans->jenis === 'motor')
                <p class="card-text">Ukuran Bagasi: {{ $kendaraans->motor->ukuran_bagasi }}</p>
                <p class="card-text">Kapasitas Bensin: {{ $kendaraans->motor->kapasitas_bensin }}</p>
            @elseif($kendaraans->jenis === 'truck')
                <p class="card-text">Jumlah Roda Ban: {{ $kendaraans->truck->jml_roda_ban }}</p>
                <p class="card-text">Luas Area Kargo: {{ $kendaraans->truck->luas_area_kargo }}</p>
            @endif
        </div>
    </div>
@endsection

