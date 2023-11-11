



@extends('layout')

@section('content')
 
<div class="card">
  <div class="card-header">Detail Transaksi</div>
  <div class="card-body">
      
<h5 class="card-title">ID Transaksi : {{ $transaksi->id_transaksi }}</h5>
<p class="card-text">ID Customer : {{ $transaksi->id_customer }}</p>
<p class="card-text">ID Kendaraan : {{ $transaksi->id_kendaraan }}</p>
<p class="card-text">Nama Customer : {{ $transaksi->customer->nama }}</p>
<p class="card-text">Jenis  : {{ $transaksi->kendaraan->jenis }}</p>
<p class="card-text">Model : {{ $transaksi->kendaraan->model }}</p>
<p class="card-text">Harga : {{ $transaksi->kendaraan->harga }}</p>

   
  </div>
</div>
 
@stop

 

      

       
