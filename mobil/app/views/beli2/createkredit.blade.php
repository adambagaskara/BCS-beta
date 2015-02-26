@extends('layout.home')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Isi Data Pembeli Kredit</small>
        </h1>
 
        
        {{ Form::open(array('url' => 'beli2/create3')) }}
            
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
        </br>

            <button class="large">{{ Form::submit('SIMPAN DATA', array('class' => 'form-control')) }}</button>
  </br>
</br>
   <div class="table-responsive">
    <strong>Pilih Paket Yang Sesuai dengan Harga Mobil</strong>
</br>
</br>
                            <table class="table table-bordered table-hover striped" id="dataTables-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Harga</th>
                                        <th>Uang Muka</th>
                                        <th>Paket Cicilan</th>
                                        <th>Bunga(%)</th>
                                        <th>Nilai Cicilan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($paketss as $value)

                                    <tr align="center">
                                        <td>{{{ $value->id }}}</td>
                                        <td>{{{ $value->harga }}}</td>
                                        <td>{{{ $value->uangmuka }}}</td>
                                        <td>{{{ $value->paketcicilan }}}</td>
                                        <td>{{{ $value->bunga }}}</td>
                                        <td>{{{ $value->nilaicicilan }}}</td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
        </br>

               <div class="table-responsive">
    <strong>Cari Mobil Yang Diinginkan</strong>
</br>
</br>
                            <table class="table table-bordered table-hover striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
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