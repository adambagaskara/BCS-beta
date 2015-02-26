<?php
class BeliKreditController extends BaseController {     

      public function create3()
{
      return View::make('beli2.createpembeli');
}

public function store3()
{
      $rules = array(
            'ktp' => 'required',
            'nama' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('beli2/create')->withErrors($validator)->withInput();
      } else {               
      DB::table('pembelis')->insert(
      array(
                  'ktp' => Input::get('ktp'),
                  'nama' => Input::get('nama'),
                  'alamat' => Input::get('alamat'),
                  'telp' => Input::get('telp')
            )
            );
 
      Session::flash('message', 'Data Pembeli Berhasil Ditambahkan!!!');
      return Redirect::to('beli2/create2');
      }
    }
         public function create4()
{
       $mobilss = DB::table('mobils')->paginate(5);
        $mobilss =
        [
            'mobilss' => $mobilss
        ];

        $paketss = DB::table('pakets')->paginate(5);
        $paketss =
        [
            'paketss' => $paketss
        ];

      return View::make('beli2.createkredit', $mobilss, $paketss);
}

public function store4()
{
      $rules = array(
            'kode_kredit' => 'required',
            'ktp' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('beli2/create2')->withErrors($validator)->withInput();
      } else {               
      DB::table('cashs')->insert(
      array(
                  'kode_kredit' => Input::get('kode_kredit'),
                  'ktp' => Input::get('ktp'),
                  'kode_mobil' => Input::get('kode_mobil'),
                  'cash_tgl' => Input::get('cash_tgl'),
                  'cash_bayar' => Input::get('cash_bayar')
            )
            );
 
      Session::flash('message', 'Data Cash Berhasil Ditambahkan!!!');
      return Redirect::to('beli2/create3');
      }
}
public function create5()
{
       $cicilanss = DB::table('cicilans')->paginate(5);
        $cicilanss =
        [
            'cicilanss' => $cicilanss
        ];

        $kreditss = DB::table('kredits')->paginate(5);
        $kreditss =
        [
            'kreditss' => $kreditss
        ];
      return View::make('beli2.createcicilan', $cicilanss, $kreditss);
}

public function store5()
{
      $rules = array(
            'kode_cicilan' => 'required',
            'kode_kredit' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('beli2/create3')->withErrors($validator)->withInput();
      } else {               
      DB::table('cicilans')->insert(
      array(
                 'kode_cicilan' => Input::get('kode_cicilan'),
                  'kode_kredit' => Input::get('kode_kredit'),
                  'tgl_cicilan' => Input::get('tgl_cicilan'),
                  'bayar' => Input::get('bayar'),
                  'cicilan_ke' => Input::get('cicilan_ke'),
                  'cicilan_sisa' => Input::get('cicilan_sisa')
            )
            );
 
      Session::flash('message', 'Data Cicilan Berhasil Ditambahkan!!!');
      return Redirect::to('kredit');
      }
}
}