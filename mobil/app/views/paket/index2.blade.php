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
            <small>Paket Kredit</small>
        </h1>

        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <div class="table-responsive">
                            <table class="table table-bordered table-hover striped" id="dataTables-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Harga</th>
                                        <th>Uang Muka</th>
                                        <th>Paket Cicilan</th>
                                        <th>Bunga(%)</th>
                                        <th>Nilai Cicilan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pakets as $value)

                                    <tr align="center">
                                        <td>{{{ $value->id }}}</td>
                                        <td>{{{ $value->harga }}}</td>
                                        <td>{{{ $value->uangmuka }}}</td>
                                        <td>{{{ $value->paketcicilan }}}</td>
                                        <td>{{{ $value->bunga }}}</td>
                                        <td>{{{ $value->nilaicicilan }}}</td>
                                        <td>
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
            {{$pakets->links()}}
 
    </div>
</div>
@stop