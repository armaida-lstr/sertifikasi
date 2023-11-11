@extends('layout')
@section('content')

 
<div class="card">
  <div class="card-header">Edit Customer Page</div>
  <div class="card-body">
      
      {{-- <form action="{{ url('buku/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH") --}}
    <form action="{{ route('customer.update', $customer->id_customer) }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")

        <input type="hidden" name="id_customer" id="id_customer" value="{{$customer->id_customer}}" id="id_customer" />

        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$customer->nama}}" class="form-control"></br>

        <label>Alamat</label></br>
        <input type="text" name="alamat" id="alamat" value="{{$customer->alamat}}" class="form-control"></br>

        <label>Nomor Telp</label></br>
        <input type="text" name="no_telp" id="no_telp" value="{{$customer->no_telp}}" class="form-control"></br>

        <label>ID Card</label></br>
        <input type="text" name="id_card" id="id_card" value="{{$customer->id_card}}" class="form-control"></br>

       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop