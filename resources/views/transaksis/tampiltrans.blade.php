
@extends('layout')
{{-- @extends('anggotas.show')
@extends('bukus.showbuku') --}}
@section('content')


    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>List Transaksi </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/transaksi/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Transaksi</th>
                                        <th>ID Customer</th>
                                        <th>ID Kendaraan</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($transaksis as $item)
                                    <tr>
                                        <td>{{ $item->id_transaksi }}</td>
                                        <td>{{ $item->id_customer }}</td>
                                        <td>{{ $item->id_kendaraan }}</td>
                                        
 
                                        <td>
                                            <a href="{{ url('/transaksi/' . $item->id_transaksi) }}" title="View Transaksi"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
{{--                                       
                                            <a href="{{ url('/transaksi/' . $item->id_transaksi . '/edit') }}" title="Edit Transaksi"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  --}}
                                            
                                           <a href="{{ route ('transaksi.edit', $item->id_transaksi ) }}" title="Edit Transaksi"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>



                                            <form method="POST" action="{{ url('/transaksi' . '/' . $item->id_transaksi) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Buku" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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