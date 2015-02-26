@extends('layout.home')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Isi Data Cicilan Pertama</small>
        </h1>
 
        
        {{ Form::open(array('url' => 'beli2/create3')) }}
            
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
            <button class="large">{{ Form::submit('SIMPAN DATA', array('class' => 'form-control')) }}</button>
  
   <div class="table-responsive">
                            <table class="table table-bordered table-hover striped" id="dataTables-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kode Kredit</th>
                                        <th>KTP</th>
                                        <th>Kode Paket Kredit</th>
                                        <th>Uang Muka</th>
                                        <th>Tanggal Kredit(ddmmyyyy)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($kreditss as $value)

                                    <tr>
                                        <td align="center">{{{ $value->id }}}</td>
                                        <td align="center">{{{ $value->kode_kredit }}}</td>
                                        <td align="center">{{{ $value->ktp }}}</td>
                                        <td align="center">{{{ $value->kode_paket }}}</td>
                                        <td align="center">{{{ $value->uangmuka }}}</td>
                                        <td align="center">{{{ $value->tgl_kredit }}}</td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
    
</br>
</br>
        {{ Form::close() }}
 
    </div>
</div>
@stop