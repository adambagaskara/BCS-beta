<?php
class CicilanController extends BaseController {
   public function index()
    {
        $cicilans = DB::table('cicilans')->paginate(5);
        $cicilans =
        [
            'cicilans' => $cicilans
        ];
        return View::make('cicilan.index', $cicilans);
    }
       public function index2()
    {
        $cicilans = DB::table('cicilans')->paginate(5);
        $cicilans =
        [
            'cicilans' => $cicilans
        ];
        return View::make('cicilan.index2', $cicilans);
    }
public function create()
{
      return View::make('cicilan.create');
}

public function store()
{
      $rules = array(
            'kode_cicilan' => 'required',
            'kode_kredit' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('cicilan/create')->withErrors($validator)->withInput();
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
      return Redirect::to('cicilan');
      }
}
public function edit($id)
{
      $cicilansbyid = DB::table('cicilans')->where('id',$id)->first();
      $cicilansbyid =
      [
          'cicilansbyid' => $cicilansbyid
    ];
  return View::make('cicilan.edit', $cicilansbyid);
}
 
 
public function update($id)
{
      $rules = array(
            'kode_cicilan' => 'required',
            'kode_kredit' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('cicilan/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('cicilans')
      ->where('id', $id)
      ->update(array(
                 'kode_cicilan' => Input::get('kode_cicilan'),
                  'kode_kredit' => Input::get('kode_kredit'),
                  'tgl_cicilan' => Input::get('tgl_cicilan'),
                  'bayar' => Input::get('bayar'),
                  'cicilan_ke' => Input::get('cicilan_ke'),
                  'cicilan_sisa' => Input::get('cicilan_sisa')
            ));
 
      Session::flash('message', 'Data Cicilan Berhasil Diubah!!!');
      return Redirect::to('cicilan');
      }
}
public function destroy($id)
{
      DB::table('cicilans')->where('id', '=', $id)->delete();
      Session::flash('message', 'Data Cicilan Berhasil Dihapus!!!');
      return Redirect::to('cicilan');
}
}