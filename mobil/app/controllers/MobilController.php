<?php
class MobilController extends BaseController {
   public function index()
    {
        $mobils = DB::table('mobils')->paginate(5);
        $mobils =
        [
            'mobils' => $mobils
        ];
        return View::make('mobil.index', $mobils);
    }
    public function index2()
    {
        $mobils = DB::table('mobils')->paginate(5);
        $mobils =
        [
            'mobils' => $mobils
        ];
        return View::make('mobil.index2', $mobils);
    }

 public function create()
{
      return View::make('mobil.create');
}

public function store()
{
      $rules = array(
            'merk' => 'required',
            'type' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('mobil/create')->withErrors($validator)->withInput();
      } else {               
      DB::table('mobils')->insert(
      array(
                  'merk' => Input::get('merk'),
                  'type' => Input::get('type'),
                  'warna' => Input::get('warna'),
                  'harga' => Input::get('harga'),
                  'tahun' => Input::get('tahun'),
                  'tgl_masuk' => Input::get('tgl_masuk'),
                  'kadaluarsa' => Input::get('kadaluarsa')
            )
            );
 
      Session::flash('message', 'Data Mobil Berhasil Ditambahkan!!!');
      return Redirect::to('mobil');
      }
}
public function edit($id)
{
      $mobilsbyid = DB::table('mobils')->where('id',$id)->first();
      $mobilsbyid =
      [
          'mobilsbyid' => $mobilsbyid
    ];
  return View::make('mobil.edit', $mobilsbyid);
}
 
 
public function update($id)
{
      $rules = array(
           'merk' => 'required',
            'type' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('mobil/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('mobils')
      ->where('id', $id)
      ->update(array(
                   'merk' => Input::get('merk'),
                  'type' => Input::get('type'),
                  'warna' => Input::get('warna'),
                  'harga' => Input::get('harga'),
                  'tahun' => Input::get('tahun'),
                  'tgl_masuk' => Input::get('tgl_masuk'),
                  'kadaluarsa' => Input::get('kadaluarsa')
            ));
 
      Session::flash('message', 'Data Mobil Berhasil Diubah!!!');
      return Redirect::to('mobil');
      }
}
public function destroy($id)
{
      DB::table('mobils')->where('id', '=', $id)->delete();
      Session::flash('message', 'Data Mobil Berhasil Dihapus!!!');
      return Redirect::to('mobil');
}
}