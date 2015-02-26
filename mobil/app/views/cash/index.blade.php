@extends('layout.home')
@section('content')
<script src="js/jquery/jquery.dataTables.js"></script>
 <script>
    $(function(){
        $('#dataTables-1').dataTable( {
            "bProcessing": true
        } );
    });
 </script>  
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Beli Cash</small>
        </h1>

        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><button class="large bg-lightBlue fg-white"><a href="{{ URL::to('cash/create') }}" class="btn btn-primary" role="button">Tambah Data Pembelian Cash</a></button></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover striped" id="dataTables-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kode Cash</th>
                                        <th>KTP</th>
                                        <th>Tanggal Cash(ddmmyyyy)</th>
                                        <th>Total Biaya</th>
                                        <th>Kode Mobil</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cashs as $value)

                                    <tr>
                                        <td align="center">{{{ $value->id }}}</td>
                                        <td align="center">{{{ $value->kode_cash }}}</td>
                                        <td align="center">{{{ $value->ktp }}}</td>
                                        <td align="center">{{{ $value->cash_tgl }}}</td>
                                        <td align="center">{{{ $value->cash_bayar }}}</td>
                                        <td align="center">{{{ $value->kode_mobil }}}</td>
                                        <td>
                                            <div class="btn-group">
                        <button class="bg-lightBlue fg-white"><a href="{{ URL::to('cash/edit/'.$value->id) }}" class="btn btn-primary">Ubah</a></button>
                        <button class="bg-darkRed fg-white"><a href="{{ URL::to('cash/destroy/'.$value->id) }}" class="btn btn-primary">Hapus</a></button>
                        </div>
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
            {{$cashs->links()}}
 
    </div>
</div>
@stop