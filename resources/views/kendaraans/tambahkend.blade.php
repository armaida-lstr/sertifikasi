@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">Kendaraan Page</div>
  <div class="card-body">

    <!-- Form Input untuk Tabel Kendaraans -->
    <form action="/kendaraan" method="post">
        {!! csrf_field() !!}
        
        <!-- Jenis Kendaraan -->
        <label>Jenis Kendaraan</label></br>
        <select name="jenis" id="jenis" class="form-control">
            <option value="">Select</option>
            <option value="mobil">Mobil</option>
            <option value="motor">Motor</option>
            <option value="truck">Truck</option>
        </select></br>

        <!-- Atribut Khusus untuk Setiap Jenis Kendaraan -->
        <div id="mobilInput" style="display: none;">
            <label>Tipe Bahan Bakar</label></br>
            <input type="text" name="tipe_bahan_bakar" id="tipe_bahan_bakar" class="form-control" value="{{ old('tipe_bahan_bakar') }}"></br>

            <label>Luas Bagasi</label></br>
            <input type="text" name="luas_bagasi" id="luas_bagasi" class="form-control" value="{{ old('luas_bagasi') }}"></br>
        </div>
        
        <div id="motorInput" style="display: none;">
            <label>Ukuran Bagasi</label></br>
            <input type="text" name="ukuran_bagasi" id="ukuran_bagasi" class="form-control" value="{{ old('ukuran_bagasi') }}"></br>
        
            <label>Kapasitas Bensin</label></br>
            <input type="text" name="kapasitas_bensin" id="kapasitas_bensin" class="form-control" value="{{ old('kapasitas_bensin') }}"></br>
        </div>
    
        <div id="truckInput" style="display: none;">
            <label>Jumlah Roda Ban</label></br>
            <input type="text" name="jml_roda_ban" id="jml_roda_ban" class="form-control" value="{{ old('jml_roda_ban') }}"></br>

            <label>Luas Area Kargo</label></br>
            <input type="text" name="luas_area_kargo" id="luas_area_kargo" class="form-control" value="{{ old('luas_area_kargo') }}"></br>
        </div>

        <!-- Form lainnya tetap sama -->

        <label>Model</label></br>
        <input type="text" name="model" id="model" class="form-control" value="{{ old('model') }}"></br>
        
        <label>Tahun</label></br>
        <input type="text" name="tahun" id="tahun" class="form-control" value="{{ old('tahun') }}"></br>

        <label>Jumlah penumpang</label></br>
        <input type="text" name="jml_kursi" id="jml_kursi" class="form-control" value="{{ old('jml_kursi') }}"></br>

        <label>Manufaktur</label></br>
        <input type="text" name="manufaktur" id="manufaktur" class="form-control" value="{{ old('manufaktur') }}"></br>

        <label>Harga</label></br>
        <input type="text" name="harga" id="harga" class="form-control" value="{{ old('harga') }}"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

    <script>
        // Tampilkan atau sembunyikan input tambahan berdasarkan jenis kendaraan yang dipilih
        document.getElementById('jenis').addEventListener('change', function() {
            var mobilInput = document.getElementById('mobilInput');
            var motorInput = document.getElementById('motorInput');
            var truckInput = document.getElementById('truckInput');

            mobilInput.style.display = 'none';
            motorInput.style.display = 'none';
            truckInput.style.display = 'none';

            var selectedJenis = this.value;

            if (selectedJenis === 'mobil') {
                mobilInput.style.display = 'block';
            } else if (selectedJenis === 'motor') {
                motorInput.style.display = 'block';
            } else if (selectedJenis === 'truck') {
                truckInput.style.display = 'block';
            }
        });
    </script>

  </div>
</div>

@stop
