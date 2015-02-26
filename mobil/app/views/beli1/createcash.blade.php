@extends('layout.home')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Isi Data Pembeli Cash</small>
        </h1>
 
        
        {{ Form::open(array('url' => 'beli1/create2')) }}
            
            <div class="form-group size3">
                {{ Form::label('kode_cash', 'Kode Cash') }}
                {{ Form::text('kode_cash', null, array('class' => 'form-control','placeholder'=>'Masukkan Kode')) }}
                {{ '<div>'.$errors->first('kode_cash').'</div>' }}
            </div>
            </br>
 
             <div class="form-group">
                {{ Form::label('ktp', 'KTP') }}
                {{ Form::text('ktp', null, array('class' => 'form-control','placeholder'=>'Masukkan Nomor KTP')) }}
                {{ '<div>'.$errors->first('ktp').'</div>' }}
            </div>
            </br>

            <div class="form-group">
                {{ Form::label('cash_tgl', 'Tanggal Pembelian(ddmmyyyy)') }}
                {{ Form::text('cash_tgl', null, array('class' => 'form-control','placeholder'=>'Masukkan Tanggal Pembelian')) }}
                {{ '<div>'.$errors->first('cash_tgl').'</div>' }}
            </div>
            </br>

            <div class="form-group">
                {{ Form::label('cash_bayar', 'Pembayaran') }}
                <label>Rp.&nbsp;{{ Form::text('cash_bayar', null, array('class' => 'form-control','placeholder'=>'Masukkan Jumlah Uang')) }}</label>
                {{ '<div>'.$errors->first('cash_bayar').'</div>' }}
            </div>
            </br>

            <div class="form-group">
                {{ Form::label('kode_mobil', 'Kode Mobil') }}
                {{ Form::text('kode_mobil', null, array('class' => 'form-control','placeholder'=>'Masukkan Kode Mobil')) }}
                {{ '<div>'.$errors->first('kode_mobil').'</div>' }}
            </div>
        </br>

            <button class="large">{{ Form::submit('SIMPAN DATA', array('class' => 'form-control')) }}</button>
   <div class="table-responsive">
    <strong align="center"><h1>Cari Mobil Yang Diinginkan</h1></strong>
                            <table class="table table-bordered table-hover striped">
                                <thead>
                                    <tr>
                                        <th>Kode Mobil</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>Warna</th>
                                        <th>Tahun</th> 
                                        <th>Tanggal Masuk</th>
                                        <th>Kadaluarsa</th>
                                        <th>Harga Mobil</th>
                                </thead>
                                <tbody>
                                @foreach($mobilss as $value)
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
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
        {{ Form::close() }}
 
    </div>
</div>
@stop