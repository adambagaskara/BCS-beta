<?php
class CashController extends BaseController {
   public function index()
    {
        $cashs = DB::table('cashs')->paginate(10);
        $cashs =
        [
            'cashs' => $cashs
        ];
        return View::make('cash.index', $cashs);
    }
       public function index2()
    {
        $cashs = DB::table('cashs')->paginate(10);
        $cashs =
        [
            'cashs' => $cashs
        ];
        return View::make('cash.index2', $cashs);
    }
 public function create()
{
      return View::make('cash.create');
}

public function store()
{
      $rules = array(
            'kode_cash' => 'required',
            'ktp' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('cash/create')->withErrors($validator)->withInput();
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
public function edit($id)
{
      $cashsbyid = DB::table('cashs')->where('id',$id)->first();
      $cashsbyid =
      [
          'cashsbyid' => $cashsbyid
    ];
  return View::make('cash.edit', $cashsbyid);
}
 
 
public function update($id)
{
      $rules = array(
            'kode_cash' => 'required',
            'ktp' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('cash/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('cashs')
      ->where('id', $id)
      ->update(array(
                  'kode_cash' => Input::get('kode_cash'),
                  'ktp' => Input::get('ktp'),
                  'kode_mobil' => Input::get('kode_mobil'),
                  'cash_tgl' => Input::get('cash_tgl'),
                  'cash_bayar' => Input::get('cash_bayar')
            ));
 
      Session::flash('message', 'Data Pembeli Cash Berhasil Diubah!!!');
      return Redirect::to('cash');
      }
}
public function destroy($id)
{
      DB::table('cashs')->where('id', '=', $id)->delete();
      Session::flash('message', 'Data Pembeli Cash Berhasil Dihapus!!!');
      return Redirect::to('cash');
}
}