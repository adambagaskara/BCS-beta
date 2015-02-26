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
            <small>Beli Kredit</small>
        </h1>

        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><button class="large bg-lightBlue fg-white"><a href="{{ URL::to('kredit/create') }}" class="btn btn-primary" role="button">Tambah Data Pembelian Kredit</a></button></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover striped" id="dataTables-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kode Kredit</th>
                                        <th>KTP</th>
                                        <th>Kode Paket</th>
                                        <th>Uang Muka</th>
                                        <th>Kode Mobil</th>
                                        <th>Tanggal Kredit(ddmmyyyy)</th>
                                        <th>Ftkp. KTP</th>
                                        <th>Ftkp. KK</th>
                                        <th>Ftkp. Slip Gaji</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($kredits as $value)

                                    <tr>
                                        <td align="center">{{{ $value->id }}}</td>
                                        <td align="center">{{{ $value->kode_kredit }}}</td>
                                        <td align="center">{{{ $value->ktp }}}</td>
                                        <td align="center">{{{ $value->kode_paket }}}</td>
                                        <td align="center">{{{ $value->uangmuka }}}</td>
                                        <td align="center">{{{ $value->kode_mobil }}}</td>
                                        <td align="center">{{{ $value->tgl_kredit }}}</td>
                                        <td align="center">{{{ $value->fotokopi_ktp }}}</td>
                                        <td align="center">{{{ $value->fotokopi_kk }}}</td>
                                        <td align="center">{{{ $value->fotokopi_slip_gaji }}}</td>
                                        <td>
                                            <div class="btn-group">
                        <button class="bg-lightBlue fg-white"><a href="{{ URL::to('kredit/edit/'.$value->id) }}" class="btn btn-primary">Ubah</a></button>
                        <button class="bg-darkRed fg-white"><a href="{{ URL::to('kredit/destroy/'.$value->id) }}" class="btn btn-primary">Hapus</a></button>
                        </div>
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
            {{$kredits->links()}}
 
    </div>
</div>
@stop