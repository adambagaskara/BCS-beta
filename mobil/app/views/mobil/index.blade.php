@extends('layout.homeadmin')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Daftar Mobil</small>
        </h1>
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><button class="large bg-lightBlue fg-white"><a href="{{ URL::to('mobil/create') }}" class="btn btn-primary" role="button">Tambah Mobil</a></button></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>Warna</th>
                                        <th>Tahun</th> 
                                        <th>Tanggal Masuk</th>
                                        <th>Kadaluarsa</th>
                                        <th>Harga Mobil</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($mobils as $value)
                                    <tr>
                                        <td align="center">{{{ $value->id }}}</td>
                                        <td align="center">{{{ $value->merk }}}</td>
                                        <td align="center">{{{ $value->type }}}</td>
                                        <td align="center">{{{ $value->warna }}}</td>
                                        <td align="center">{{{ $value->tahun }}}</td>
                                        <td align="center">{{{ $value->tgl_masuk }}}</td>
                                        <td align="center">{{{ $value->kadaluarsa }}}</td>
                                        <td align="center">{{{ $value->harga }}}</td>
                                        <td>
                                            <div class="btn-group">
                        <button class="bg-lightBlue fg-white"><a href="{{ URL::to('mobil/edit/'.$value->id) }}" class="btn btn-primary">Ubah</a></button>
                        <button class="bg-darkRed fg-white"><a href="{{ URL::to('mobil/destroy/'.$value->id) }}" class="btn btn-primary">Hapus</a></button>
                        </div>
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
            {{$mobils->links()}}
 
    </div>
</div>
@stop