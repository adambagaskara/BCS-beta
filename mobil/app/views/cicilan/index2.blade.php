@extends('layout.homeadmin')
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
            <small>Bayar Cicilan</small>
        </h1>

        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><button class="large bg-lightBlue fg-white"><a href="{{ URL::to('cicilan/create') }}" class="btn btn-primary" role="button">Tambah Data Bayar Cicil</a></button></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover striped" id="dataTables-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kode Cicilan</th>
                                        <th>Kode Kredit</th>
                                        <th>Tanggal Cicilan(ddmmyyyy)</th>
                                        <th>Jumlah Uang</th>
                                        <th>Cicilan Ke</th>
                                        <th>Sisa Cicilan</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cicilans as $value)

                                    <tr>
                                        <td align="center">{{{ $value->id }}}</td>
                                        <td align="center">{{{ $value->kode_cicilan }}}</td>
                                        <td align="center">{{{ $value->kode_kredit }}}</td>
                                        <td align="center">{{{ $value->tgl_cicilan }}}</td>
                                        <td align="center">{{{ $value->bayar }}}</td>
                                        <td align="center">{{{ $value->cicilan_ke }}}</td>
                                        <td align="center">{{{ $value->cicilan_sisa }}}</td>
                                        <td>
                                            <div class="btn-group">
                        <button class="bg-lightBlue fg-white"><a href="{{ URL::to('cicilan/edit/'.$value->id) }}" class="btn btn-primary">Ubah</a></button>
                        <button class="bg-darkRed fg-white"><a href="{{ URL::to('cicilan/destroy/'.$value->id) }}" class="btn btn-primary">Hapus</a></button>
                        </div>
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
            {{$cicilans->links()}}
 
    </div>
</div>
@stop