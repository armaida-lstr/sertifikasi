@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Tambah Transaksi Page</div>
  <div class="card-body">
      
    <form action="{{ route('transaksi.store') }}" method="post">
      @csrf

        {{-- <label>ID Anggota</label></br> --}}
        {{-- <input type="text" name="id_anggota" id="id_anggota" class="form-control"></br> --}}
        <label for="id_customer">ID Customer</label><br>
        <select name="id_customer" id="id_customer" class="form-control">
            <option value="">Select ID Customer</option>
            @foreach ($customers as $item)
                <option value="{{ $item->id_customer }}">{{ $item->id_customer }}</option>
            @endforeach
        </select>

        {{-- <label>ID Buku</label></br>
        <input type="text" name="id_buku" id="id_buku" class="form-control"></br> --}}
        <label for="id_kendaraan">ID Kendaraan</label><br>
        <select name="id_kendaraan" id="id_kendaraan" class="form-control">
          <option value="">Select ID Kendaraan</option>
          @foreach ($kendaraans as $item)
              {{-- @if (!$transaksikendaraanIds->contains($item->id_kendaraan)) <!-- Assuming $transaksiBukuIds is an array of existing transaksi IDs --> --}}
                  <option value="{{ $item->id_kendaraan }}">{{ $item->id_kendaraan }}</option>
              {{-- @endif --}}
          @endforeach
      </select>
        

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop