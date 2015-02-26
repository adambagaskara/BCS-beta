@extends('layout.home')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Ubah Data Mobil</small>
        </h1>
        
        {{ Form::model($mobilsbyid, array('route' => array('mobil.update', $mobilsbyid->id))) }}
           <div class="form-group">
                {{ Form::label('merk', 'Merk Mobil') }}
                {{ Form::text('merk', null, array('class' => 'form-control','placeholder'=>'Masukkan Merk Mobil')) }}
                {{ '<div>'.$errors->first('nama').'</div>' }}
            </div>
 
             <div class="form-group">
                {{ Form::label('type', 'Tipe Mobil') }}
                {{ Form::text('type', null, array('class' => 'form-control','placeholder'=>'Masukkan Tipe Mobil')) }}
                {{ '<div>'.$errors->first('type').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('warna', 'Warna Mobil') }}
                {{ Form::text('warna', null, array('class' => 'form-control','placeholder'=>'Masukkan Warna Mobil')) }}
                {{ '<div>'.$errors->first('warna').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('tahun', 'Tahun') }}
                {{ Form::text('tahun', null, array('class' => 'form-control','placeholder'=>'Masukkan Tahun Produksi')) }}
                {{ '<div>'.$errors->first('tahun').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('tgl_masuk', 'Tanggal Masuk(ddmmyyyy)') }}
                {{ Form::text('tgl_masuk', null, array('class' => 'form-control','placeholder'=>'Masukkan Tanggal Masuk Mobil')) }}
                {{ '<div>'.$errors->first('tgl_masuk').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('kadaluarsa', 'Kadaluarsa Mobil(ddmmyyy)') }}
                {{ Form::text('kadaluarsa', null, array('class' => 'form-control','placeholder'=>'Masukkan Tanggal Kadaluarsa')) }}
                {{ '<div>'.$errors->first('kadaluarsa').'</div>' }}
            </div>

            <div class="form-group input-control text size3">
                {{ Form::label('harga', 'Harga Mobil') }}
                <label>Rp.&nbsp;{{ Form::text('harga', null, array('class' => 'form-control','placeholder'=>'Masukkan Harga Mobil')) }}</label>
                {{ '<div>'.$errors->first('harga').'</div>' }}
            </div>
        </div>
            <button class="large">{{ Form::submit('SIMPAN DATA', array('class' => 'form-control')) }}</button>
 
        {{ Form::close() }}
 
    </div>
</div>
@stop
