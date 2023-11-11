




  
@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Detail Customer</div>
  <div class="card-body">
      
        {{-- <h5 class="card-title">ID Customer : {{ $customers->id_customer }}</h5> --}}
        <p class="card-text">Nama : {{ $customers->nama }}</p>
        <p class="card-text">Alamat : {{ $customers->alamat }}</p>
        <p class="card-text">Nomor Telp : {{ $customers->no_telp }}</p>
        <p class="card-text">ID Card : {{ $customers->id_card }}</p>
   
  </div>
</div>
 
@stop

 

      

       
