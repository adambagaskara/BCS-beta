@extends('layout.home')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Ubah Data Paket</small>
        </h1>
        
        {{ Form::model($paketsbyid, array('route' => array('paket.update', $paketsbyid->id))) }}
            <div class="form-group">
                {{ Form::label('harga', 'Harga Paket') }}
                <label>Rp.&nbsp;{{ Form::text('harga', null, array('class' => 'form-control','placeholder'=>'Masukkan Harga Paket')) }}</label>
                {{ '<div>'.$errors->first('harga').'</div>' }}
            </div>
 
             <div class="form-group">
                {{ Form::label('uangmuka', 'Uang Muka') }}
                <label>Rp.&nbsp;{{ Form::text('uangmuka', null, array('class' => 'form-control','placeholder'=>'Masukkan Uang Muka')) }}</label>
                {{ '<div>'.$errors->first('uangmuka').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('paketcicilan', 'Paket Cicilan') }}
                {{ Form::text('paketcicilan', null, array('class' => 'form-control','placeholder'=>'Masukkan Lama Cicilan')) }}
                {{ '<div>'.$errors->first('paketcicilan').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('bunga', 'Bunga(%)') }}
                {{ Form::text('bunga', null, array('class' => 'form-control','placeholder'=>'Masukkan Bunga')) }}
                {{ '<div>'.$errors->first('bunga').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('nilaicicilan', 'Nilai Cicilan per-Bulan') }}
                <label>Rp.&nbsp;{{ Form::text('nilaicicilan', null, array('class' => 'form-control','placeholder'=>'Masukkan Nilai Cicilan')) }}</label>
                {{ '<div>'.$errors->first('nilaicicilan').'</div>' }}
            </div>
            <button class="large">{{ Form::submit('SIMPAN DATA', array('class' => 'form-control')) }}</button>
 
        {{ Form::close() }}
 
    </div>
</div>
@stop