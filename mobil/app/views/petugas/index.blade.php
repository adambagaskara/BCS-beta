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
            <small>Daftar Petugas</small>
        </h1>
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><button class="large bg-lightBlue fg-white"><a href="{{ URL::to('petugas/create') }}" class="btn btn-primary" role="button">Tambah Petugas Baru</a></button></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover striped" id="dataTables-1">
                                <thead>
                                    <tr>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($petugass as $value)
                                    <tr>
                                        <td align="center">{{{ $value->email }}}</td>
                                        <td align="center">{{{ $value->password }}}</td>
                                        <td>
                                            <div class="btn-group">
                        <button class="bg-lightBlue fg-white "><a href="{{ URL::to('petugas/edit/'.$value->id) }}" class="btn btn-primary">Ubah&nbsp;</a></button>
                        <button class="bg-darkRed fg-white "><a href="{{ URL::to('petugas/destroy/'.$value->id) }}" class="btn btn-primary">Hapus</a></button>
                        </div>
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
            {{$petugass->links()}}
 
    </div>
</div>
@stop