@extends('layout')
@section('content')

 
<div class="card">
  <div class="card-header">Edit Kendaraan Page</div>
  <div class="card-body">

    <form action="{{ route('kendaraan.update', $kendaraans->id_kendaraan) }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")

        <input type="hidden" name="id_kendaraan" id="id_kendaraan" value="{{$kendaraans->id_kendaraan}}" id="id_kendaraan" />

        <label>Jenis</label></br>
        <input name="nama" id="nama" value="{{$kendaraans->jenis}}" class="form-control" readonly></br>

        <label>Model</label></br>
        <input name="alamat" id="alamat" value="{{$kendaraans->model}}" class="form-control" readonly></br>

        <label>Tahun</label></br>
        <input name="no_telp" id="no_telp" value="{{$kendaraans->tahun}}" class="form-control" readonly></br>

        <label>Jumlah Penumpang</label></br>
        <input type="text" name="jml_kursi" id="id_card" value="{{$kendaraans->jml_kursi}}" class="form-control"></br>

        
        <label>Manufaktur</label></br>
        <input type="text" name="manufaktur" id="manufaktur" value="{{$kendaraans->manufaktur}}" class="form-control"></br>

        
        <label>Harga</label></br>
        <input type="text" name="harga" id="harga" value="{{$kendaraans->harga}}" class="form-control"></br>

       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop