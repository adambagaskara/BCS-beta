<?php
class KreditController extends BaseController {
   public function index()
    {
        $kredits = DB::table('kredits')->paginate(5);
        $kredits =
        [
            'kredits' => $kredits
        ];
        return View::make('kredit.index', $kredits);
    }
       public function index2()
    {
        $kredits = DB::table('kredits')->paginate(5);
        $kredits =
        [
            'kredits' => $kredits
        ];
        return View::make('kredit.index2', $kredits);
    }
 public function create()
{
      return View::make('kredit.create');
}

public function store()
{
      $rules = array(
            'kode_kredit' => 'required',
            'ktp' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('kredit/create')->withErrors($validator)->withInput();
      } else {               
      DB::table('kredits')->insert(
      array(
                 'kode_kredit' => Input::get('kode_kredit'),
                  'ktp' => Input::get('ktp'),
                  'kode_paket' => Input::get('kode_paket'),
                  'uangmuka' => Input::get('uangmuka'),
                  'kode_mobil' => Input::get('kode_mobil'),
                  'tgl_kredit' => Input::get('tgl_kredit'),
                  'fotokopi_ktp' => Input::get('fotokopi_ktp'),
                  'fotokopi_kk' => Input::get('fotokopi_kk'),
                  'fotokopi_slip_gaji' => Input::get('fotokopi_slip_gaji') 
            )
            );
 
      Session::flash('message', 'Data Kredit Berhasil Ditambahkan!!!');
      return Redirect::to('kredit');
      }
}
public function edit($id)
{
      $kreditsbyid = DB::table('kredits')->where('id',$id)->first();
      $kreditsbyid =
      [
          'kreditsbyid' => $kreditsbyid
    ];
  return View::make('kredit.edit', $kreditsbyid);
}
 
 
public function update($id)
{
      $rules = array(
			'kode_kredit' => 'required',
            'ktp' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('kredit/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('kredits')
      ->where('id', $id)
      ->update(array(
				  'kode_kredit' => Input::get('kode_kredit'),
                  'ktp' => Input::get('ktp'),
                  'kode_paket' => Input::get('kode_paket'),
                  'uangmuka' => Input::get('uangmuka'),
                  'kode_mobil' => Input::get('kode_mobil'),
                  'tgl_kredit' => Input::get('tgl_kredit'),
                  'fotokopi_ktp' => Input::get('fotokopi_ktp'),
                  'fotokopi_kk' => Input::get('fotokopi_kk'),
                  'fotokopi_slip_gaji' => Input::get('fotokopi_slip_gaji') 
            ));
 
      Session::flash('message', 'Data Pembeli Kredit Berhasil Diubah!!!');
      return Redirect::to('kredit');
      }
}
public function destroy($id)
{
      DB::table('kredits')->where('id', '=', $id)->delete();
      Session::flash('message', 'Data Pembeli Kredit Berhasil Dihapus!!!');
      return Redirect::to('kredit');
}
}