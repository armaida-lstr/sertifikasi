@extends('layout')
@section('content')

 
<div class="card">
  <div class="card-header">Edit Transaksi Page</div>
  <div class="card-body">


    <form action="{{ route('transaksi.update', $transaksi->id_transaksi) }}" method="post">
        {!! csrf_field() !!}
        @method("PUT")

        <input type="hidden" name="id_transaksi" id="id_transaksi" value="{{$transaksi->id_transaksi}}" id="id_transaksi" />
        
        {{-- <label>ID Anggota</label></br>
        <input type="text" name="id_anggota" id="id_anggota" value="{{$transaksi->id_anggota}}" class="form-control"></br> --}}


        <label for="id_customer">ID Customer</label><br>
        <select name="id_customer" id="id_customer" class="form-control">
            <option value="{{$transaksi->id_customer}}">{{$transaksi->id_customer}}</option>
            @foreach ($customers as $item)
                <option value="{{ $item->id_customer }}">{{ $item->id_customer }}</option>
            @endforeach
        </select>

        <label for="id_kendaraan">ID Kendaraan</label><br>
        <select name="id_kendaraan" id="id_kendaraan" class="form-control">
          <option value="{{$transaksi->id_kendaraan}}">{{$transaksi->id_kendaraan}}</option>
          @foreach ($kendaraans as $item)
              {{-- @if (!$transaksiBukuIds->contains($item->id_kendaraan)) <!-- Assuming $transaksiBukuIds is an array of existing transaksi IDs --> --}}
                  <option value="{{ $item->id_kendaraan }}">{{ $item->id_kendaraan }}</option>
              {{-- @endif --}}
          @endforeach
        </select>
        {{-- <label>ID Buku</label></br>
        <input type="text" name="id_buku" id="id_buku" value="{{$transaksi->id_buku}}" class="form-control"></br> --}}


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop