@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>List Kendaraan</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/kendaraan/create') }}" class="btn btn-success btn-sm" title="Add New Vehicle">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Kendaraan</th>
                                        <th>Jenis</th>
                                        <th>Model</th>
                                        <th>Tahun</th>
                                        <th>Jumlah penumpang</th>
                                        <th>Manufaktur</th>
                                        <th>Harga</th>
                                        {{-- @if($kendaraans->isNotEmpty())
                                            @php
                                                $sampleItem = $kendaraans->first();
                                            @endphp
                                            @if($sampleItem->jenis === 'mobil')
                                                <th>Tipe Bahan Bakar</th>
                                                <th>Luas Bagasi</th>
                                            @elseif($sampleItem->jenis === 'motor')
                                                <th>Ukuran Bagasi</th>
                                                <th>Kapasitas Bensin</th>
                                            @elseif($sampleItem->jenis === 'truck')
                                                <th>Jumlah Roda Ban</th>
                                                <th>Luas Area Kargo</th>
                                            @endif
                                        @endif --}}

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kendaraans as $item)
                                        <tr>
                                            <td>{{ $item->id_kendaraan }}</td>
                                            <td>{{ $item->jenis }}</td>
                                            <td>{{ $item->model }}</td>
                                            <td>{{ $item->tahun }}</td>
                                            <td>{{ $item->jml_kursi }}</td>
                                            <td>{{ $item->manufaktur }}</td>
                                            <td>{{ $item->harga }}</td>
                                            {{-- @if($item->jenis === 'mobil')
                                                <td>{{ $item->mobil->tipe_bahan_bakar }}</td>
                                                <td>{{ $item->mobil->luas_bagasi }}</td>
                                            @elseif($item->jenis === 'motor')
                                                <td>{{ $item->motor->ukuran_bagasi }}</td>
                                                <td>{{ $item->motor->kapasitas_bensin }}</td>
                                            @elseif($item->jenis === 'truck')
                                                <td>{{ $item->truck->jml_roda_ban }}</td>
                                                <td>{{ $item->truck->luas_area_kargo }}</td>
                                            @endif --}}

                                        <td>
                                            <a href="{{ url('/kendaraan/' . $item->id_kendaraan) }}" title="View Vehicle">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                            </a>

                                            <a href="{{ route('kendaraan.edit', $item->id_kendaraan) }}" title="Edit Vehicle">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                            </a>

                                            <form method="POST" action="{{ route('kendaraan.destroy', $item->id_kendaraan) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Vehicle" onclick="return confirm('Confirm delete?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
