@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Ubah Profile</small>
        </h1>
        
        {{ Form::model($profilesbyid, array('route' => array('crud.update', $profilesbyid->id))) }}
            <div class="form-group">
                {{ Form::label('nama', 'Nama') }}
                {{ Form::text('nama', null, array('class' => 'form-control','placeholder'=>'masukkan nama')) }}
                {{ '<div>'.$errors->first('nama').'</div>' }}
            </div>
 
             <div class="form-group">
                {{ Form::label('jeniskelamin', 'Jenis Kelamin') }}
                {{ Form::select('jeniskelamin', array('L' => 'Laki - Laki', 'P' => 'Perempuan'), null, array('class' => 'form-control','placeholder'=>'Pilih Jenis Kelamin')) }}
                {{ '<div>'.$errors->first('jeniskelamin').'</div>' }}
            </div>
 
            <div class="form-group">
                {{ Form::label('alamat', 'Alamat') }}
                {{ Form::textarea('alamat', null, array('class' => 'form-control','placeholder'=>'masukkan alamat')) }}  
            </div>
            {{ Form::submit('SIMPAN', array('class' => 'form-control')) }}
 
        {{ Form::close() }}
 
    </div>
</div>
@stop