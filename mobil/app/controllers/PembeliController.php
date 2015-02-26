<?php
class PembeliController extends BaseController {
   public function index()
    {
        $pembelis = DB::table('pembelis')->paginate(15);
        $pembelis =
        [
            'pembelis' => $pembelis
        ];
        return View::make('pembeli.index', $pembelis);
    }

       public function index2()
    {
        $pembelis = DB::table('pembelis')->paginate(15);
        $pembelis =
        [
            'pembelis' => $pembelis
        ];
        return View::make('pembeli.index2', $pembelis);
    }

public function create()
{
      return View::make('pembeli.create');
}

public function store()
{
      $rules = array(
            'ktp' => 'required',
            'nama' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('pembeli/create')->withErrors($validator)->withInput();
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
      return Redirect::to('pembeli');
      }
}
public function edit($id)
{
      $pembelisbyid = DB::table('pembelis')->where('id',$id)->first();
      $pembelisbyid =
      [
          'pembelisbyid' => $pembelisbyid
    ];
  return View::make('pembeli.edit', $pembelisbyid);
}
 
 
public function update($id)
{
      $rules = array(
           'ktp' => 'required',
            'nama' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('pembeli/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('pembelis')
      ->where('id', $id)
      ->update(array(
                   'ktp' => Input::get('ktp'),
                  'nama' => Input::get('nama'),
                  'alamat' => Input::get('alamat'),
                  'telp' => Input::get('telp')
            ));
 
      Session::flash('message', 'Data Pembeli Berhasil Diubah!!!');
      return Redirect::to('pembeli');
      }
}
public function destroy($id)
{
      DB::table('pembelis')->where('id', '=', $id)->delete();
      Session::flash('message', 'Data Pembeli Berhasil Dihapus!!!');
      return Redirect::to('pembeli');
}
}