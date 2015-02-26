<?php
class PaketKreditController extends BaseController {
   public function index()
    {
        $pakets = DB::table('pakets')->paginate(5);
        $pakets =
        [
            'pakets' => $pakets
        ];
        return View::make('paket.index', $pakets);
    }
    public function index2()
    {
        $pakets = DB::table('pakets')->paginate(5);
        $pakets =
        [
            'pakets' => $pakets
        ];
        return View::make('paket.index2', $pakets);
    }
 public function create()
{
      return View::make('paket.create');
}

public function store()
{
      $rules = array(
            'harga' => 'required',
            'uangmuka' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('paket/create')->withErrors($validator)->withInput();
      } else {               
      DB::table('pakets')->insert(
      array(
                  'harga' => Input::get('harga'),
                  'uangmuka' => Input::get('uangmuka'),
                  'paketcicilan' => Input::get('paketcicilan'),
                  'bunga' => Input::get('bunga'),
                  'nilaicicilan' => Input::get('nilaicicilan')
            )
            );
 
      Session::flash('message', 'Paket Baru Berhasil Ditambahkan!!!');
      return Redirect::to('paket');
      }
}
public function edit($id)
{
      $paketsbyid = DB::table('pakets')->where('id',$id)->first();
      $paketsbyid =
      [
          'paketsbyid' => $paketsbyid
    ];
  return View::make('paket.edit', $paketsbyid);
}
 
 
public function update($id)
{
      $rules = array(
           'harga' => 'required',
            'uangmuka' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('paket/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('pakets')
      ->where('id', $id)
      ->update(array(
                   'harga' => Input::get('harga'),
                  'uangmuka' => Input::get('uangmuka'),
                  'paketcicilan' => Input::get('paketcicilan'),
                  'bunga' => Input::get('bunga'),
                  'nilaicicilan' => Input::get('nilaicicilan')
            ));
 
      Session::flash('message', 'Data Paket Berhasil Diubah!!!');
      return Redirect::to('paket');
      }
}
public function destroy($id)
{
      DB::table('pakets')->where('id', '=', $id)->delete();
      Session::flash('message', 'Paket Berhasil Dihapus!!!');
      return Redirect::to('paket');
}
}