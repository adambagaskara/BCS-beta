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
            <small>Daftar Pembeli</small>
        </h1>
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><button class="large bg-lightBlue fg-white"><a href="{{ URL::to('pembeli/create') }}" class="btn btn-primary" role="button">Tambah Pembeli Baru</a></button></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover striped" id="dataTables-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>KTP</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pembelis as $value)
                                    <tr>
                                        <td align="center">{{{ $value->id }}}</td>
                                        <td align="center">{{{ $value->ktp }}}</td>
                                        <td align="center">{{{ $value->nama }}}</td>
                                        <td align="center">{{{ $value->alamat }}}</td>
                                        <td align="center">{{{ $value->telp }}}</td>
                                        <td>
                                            <div class="btn-group">
                        <button class="bg-lightBlue fg-white"><a href="{{ URL::to('pembeli/edit/'.$value->id) }}" class="btn btn-primary">Ubah</a></button>
                        <button class="bg-darkRed fg-white"><a href="{{ URL::to('pembeli/destroy/'.$value->id) }}" class="btn btn-primary">Hapus</a></button>
                        </div>
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
            {{$pembelis->links()}}
 
    </div>
</div>
@stop