@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Customer Page</div>
  <div class="card-body">
      
    <form action="/customer" method="post">
        {!! csrf_field() !!}

        {{-- <label>ID Buku</label></br>
        <input type="text" name="id_buku" id="id_buku" class="form-control"></br> --}}

        <label>Nama Customer</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        
        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" class="form-control"></br>

        <label>Nomor Telp</label></br>
        <input type="text" name="no_telp" id="no_telp" class="form-control"></br>

        <label>ID Card</label></br>
        <input type="text" name="id_card" id="id_card" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop