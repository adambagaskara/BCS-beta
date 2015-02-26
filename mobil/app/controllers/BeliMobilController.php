<?php
class BeliMobilController extends BaseController {

public function create1()
{
      return View::make('beli1.createpembeli');
}

public function store1()
{
      $rules = array(
            'ktp' => 'required',
            'nama' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('beli1/create')->withErrors($validator)->withInput();
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
      return Redirect::to('beli1/create2');
      }
    }
     public function create2()
{
       $mobilss = DB::table('mobils')->paginate(5);
        $mobilss =
        [
            'mobilss' => $mobilss
        ];
      return View::make('beli1.createcash', $mobilss);
}

public function store2()
{
      $rules = array(
            'kode_cash' => 'required',
            'ktp' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('beli1/create2')->withErrors($validator)->withInput();
      } else {               
      DB::table('cashs')->insert(
      array(
                  'kode_cash' => Input::get('kode_cash'),
                  'ktp' => Input::get('ktp'),
                  'kode_mobil' => Input::get('kode_mobil'),
                  'cash_tgl' => Input::get('cash_tgl'),
                  'cash_bayar' => Input::get('cash_bayar')
            )
            );
 
      Session::flash('message', 'Data Cash Berhasil Ditambahkan!!!');
      return Redirect::to('cash');
      }
}
}