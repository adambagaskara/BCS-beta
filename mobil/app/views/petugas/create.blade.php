@extends('layout.homeadmin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Tambah Petugas</small>
        </h1>

        {{ Form::open(array('url' => 'petugas/create')) }}
            
            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, array('class' => 'form-control','placeholder'=>'Masukkan Email')) }}
                {{ '<div>'.$errors->first('email').'</div>' }}
            </div> 
            <div class="form-group">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', null, array('class' => 'form-control','placeholder'=>'Masukkan Password')) }}
                {{ '<div>'.$errors->first('password').'</div>' }}
            </div>
            <button class="large">{{ Form::submit('SIMPAN DATA', array('class' => 'form-control')) }}</button>
  
        {{ Form::close() }}
 
    </div>
</div>
@stop