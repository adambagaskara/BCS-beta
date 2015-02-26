@extends('layout.home')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Tambah Data Cicilan</small>
        </h1>
 
        
        {{ Form::open(array('url' => 'cicilan/create')) }}
            
          <div class="form-group">
                {{ Form::label('kode_cicilan', 'Kode Cicilan') }}
                {{ Form::text('kode_cicilan', null, array('class' => 'form-control','placeholder'=>'Masukkan Kode Cicilan')) }}
                {{ '<div>'.$errors->first('kode_cicilan').'</div>' }}
            </div>
 
             <div class="form-group">
                {{ Form::label('kode_kredit', 'Kode Kredit') }}
                {{ Form::text('kode_kredit', null, array('class' => 'form-control','placeholder'=>'Masukkan Kode Kredit')) }}
                {{ '<div>'.$errors->first('kode_kredit').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('tgl_cicilan', 'Tanggal Cicilan(ddmmyyyy)') }}
                {{ Form::text('tgl_cicilan', null, array('class' => 'form-control','placeholder'=>'Masukkan Tanggal')) }}
                {{ '<div>'.$errors->first('tgl_cicilan').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('bayar', 'Jumlah Uang') }}
                {{ Form::text('bayar', null, array('class' => 'form-control','placeholder'=>'Masukkan Jumlah Bayar')) }}
                {{ '<div>'.$errors->first('bayar').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('cicilan_ke', 'Cicilan Ke-') }}
                {{ Form::text('cicilan_ke', null, array('class' => 'form-control','placeholder'=>'Masukkan Angka')) }}
                {{ '<div>'.$errors->first('cicilan_ke').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('cicilan_sisa', 'Sisa Cicilan') }}
                {{ Form::text('cicilan_sisa', null, array('class' => 'form-control','placeholder'=>'Masukkan Angka')) }}
                {{ '<div>'.$errors->first('cicilan_sisa').'</div>' }}
            </div>
            <button class="large">{{ Form::submit('SIMPAN DATA', array('class' => 'form-control')) }}</button>
  
        {{ Form::close() }}
 
    </div>
</div>
@stop