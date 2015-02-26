@extends('layout.home')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Tambah Profile</small>
        </h1>

        {{ Form::open(array('url' => 'pembeli/create')) }}
            
            <div class="form-group">
                {{ Form::label('ktp', 'Nomor KTP') }}
                {{ Form::text('ktp', null, array('class' => 'form-control','placeholder'=>'Nomor KTP Anda')) }}
                {{ '<div>'.$errors->first('ktp').'</div>' }}
            </div> 
            <div class="form-group">
                {{ Form::label('nama', 'Nama') }}
                {{ Form::text('nama', null, array('class' => 'form-control','placeholder'=>'Nama Anda')) }}
                {{ '<div>'.$errors->first('nama').'</div>' }}
            </div>
 
             <div class="form-group">
                {{ Form::label('telp', 'Nomor Telepon') }}
                {{ Form::text('telp', null, array('class' => 'form-control','placeholder'=>'Nomor Telepon')) }}
                {{ '<div>'.$errors->first('telp').'</div>' }}
            </div>
 
            <div class="form-group">
                {{ Form::label('alamat', 'Alamat') }}
                {{ Form::textarea('alamat', null, array('class' => 'form-control','placeholder'=>'Alamat Anda')) }}  
            </div>
            <button class="large">{{ Form::submit('SIMPAN DATA', array('class' => 'form-control')) }}</button>
  
        {{ Form::close() }}
 
    </div>
</div>
@stop