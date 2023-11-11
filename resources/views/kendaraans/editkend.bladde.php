@extends('layout')
@section('content')

 
<div class="card">
  <div class="card-header">Edit Customer Page</div>
  <div class="card-body">

    <form action="{{ route('kendaraan.update', $kendaraan->id_kendaraan) }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")

        <input type="hidden" name="id_kendaraan" id="id_kendaraan" value="{{$kendaraan->id_kendaraan}}" id="id_kendaraan" />

        <label>Jenis</label></br>
        <input name="nama" id="nama" value="{{$kendaraan->jenis}}" class="form-control"></br>

        <label>Model</label></br>
        <input name="alamat" id="alamat" value="{{$kendaraan->model}}" class="form-control"></br>

        <label>Tahun</label></br>
        <input name="no_telp" id="no_telp" value="{{$kendaraan->tahun}}" class="form-control"></br>

        <label>JML Kursi</label></br>
        <input type="text" name="jml_kursi" id="id_card" value="{{$kendaraan->jml_kursi}}" class="form-control"></br>

        
        <label>Manufaktur</label></br>
        <input type="text" name="manufaktur" id="manufaktur" value="{{$kendaraan->manufaktur}}" class="form-control"></br>

        
        <label>Harga</label></br>
        <input type="text" name="harga" id="harga" value="{{$kendaraan->harga}}" class="form-control"></br>

       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop