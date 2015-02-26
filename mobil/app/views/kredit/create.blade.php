@extends('layout.home')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Tambah Data Pembeli Kredit</small>
        </h1>
        <cite><legend><em>*Isian Kode Kredit, Kode Paket Diisi Oleh Petugas.</em></legend></cite>
 
        
        {{ Form::open(array('url' => 'kredit/create')) }}
            
            <div class="form-group">
                {{ Form::label('kode_kredit', 'Kode Kredit') }}
                {{ Form::text('kode_kredit', null, array('class' => 'form-control','placeholder'=>'Masukkan Kode Kredit')) }}
                {{ '<div>'.$errors->first('kode_kredit').'</div>' }}
            </div>
 
             <div class="form-group">
                {{ Form::label('ktp', 'KTP') }}
                {{ Form::text('ktp', null, array('class' => 'form-control','placeholder'=>'Masukkan Nomor KTP')) }}
                {{ '<div>'.$errors->first('ktp').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('kode_paket', 'Kode Paket') }}
                {{ Form::text('kode_paket', null, array('class' => 'form-control','placeholder'=>'Masukkan Kode Paket')) }}
                {{ '<div>'.$errors->first('kode_paket').'</div>' }}
            </div>

          <div class="form-group">
                {{ Form::label('uangmuka', 'Uang Muka(Dari Paket)') }}
                {{ Form::text('uangmuka', null, array('class' => 'form-control','placeholder'=>'Masukkan Jumlah DP')) }}
                {{ '<div>'.$errors->first('uangmuka').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('kode_mobil', 'Kode Mobil') }}
                {{ Form::text('kode_mobil', null, array('class' => 'form-control','placeholder'=>'Masukkan Kode Mobil')) }}
                {{ '<div>'.$errors->first('kode_mobil').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('tgl_kredit', 'Tanggal Pembelian(ddmmyyyy)') }}
                {{ Form::text('tgl_kredit', null, array('class' => 'form-control','placeholder'=>'Masukkan Tanggal Pembelian')) }}
                {{ '<div>'.$errors->first('tgl_kredit').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('fotokopi_ktp', 'Fotokopi KTP') }}
                {{ Form::text('fotokopi_ktp', null, array('class' => 'form-control','placeholder'=>'Y/N')) }}
                {{ '<div>'.$errors->first('fotokopi_ktp').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('fotokopi_kk', 'Fotokopi KK') }}
                {{ Form::text('fotokopi_kk', null, array('class' => 'form-control','placeholder'=>'Y/N')) }}
                {{ '<div>'.$errors->first('fotokopi_kk').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('fotokopi_slip_gaji', 'Fotokopi Slip Gaji') }}
                {{ Form::text('fotokopi_slip_gaji', null, array('class' => 'form-control','placeholder'=>'Y/N')) }}
                {{ '<div>'.$errors->first('fotokopi_slip_gaji').'</div>' }}
            </div>

            <button class="large">{{ Form::submit('SIMPAN DATA', array('class' => 'form-control')) }}</button>
  
        {{ Form::close() }}
 
    </div>
</div>
@stop