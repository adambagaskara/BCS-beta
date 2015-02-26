@extends('layout.home')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Ubah Data Pembeli Cash</small>
        </h1>
        
        {{ Form::model($cashsbyid, array('route' => array('cash.update', $cashsbyid->id))) }}
           <div class="form-group">
                {{ Form::label('kode_cash', 'Kode Cash') }}
                {{ Form::text('kode_cash', null, array('class' => 'form-control','placeholder'=>'Masukkan Kode')) }}
                {{ '<div>'.$errors->first('kode_cash').'</div>' }}
            </div>
 
             <div class="form-group">
                {{ Form::label('ktp', 'KTP') }}
                {{ Form::text('ktp', null, array('class' => 'form-control','placeholder'=>'Masukkan Nomor KTP')) }}
                {{ '<div>'.$errors->first('ktp').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('cash_tgl', 'Tanggal Pembelian(ddmmyyyy)') }}
                {{ Form::text('cash_tgl', null, array('class' => 'form-control','placeholder'=>'Masukkan Tanggal Pembelian')) }}
                {{ '<div>'.$errors->first('cash_tgl').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('kode_mobil', 'Kode Mobil') }}
                {{ Form::text('kode_mobil', null, array('class' => 'form-control','placeholder'=>'Masukkan Kode Mobil')) }}
                {{ '<div>'.$errors->first('kode_mobil').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('cash_bayar', 'Pembayaran') }}
                <label>Rp.&nbsp;{{ Form::text('cash_bayar', null, array('class' => 'form-control','placeholder'=>'Masukkan Jumlah Uang')) }}</label>
                {{ '<div>'.$errors->first('cash_bayar').'</div>' }}
            </div>
            <button class="large">{{ Form::submit('SIMPAN DATA', array('class' => 'form-control')) }}</button>
 
        {{ Form::close() }}
 
    </div>
</div>
@stop