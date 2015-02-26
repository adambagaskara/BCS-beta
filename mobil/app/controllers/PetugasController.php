<?php
class PetugasController extends BaseController {
   public function index()
    {
        $petugass = DB::table('users')->paginate(10);
        $petugass =
        [
            'petugass' => $petugass
        ];
        return View::make('petugas.index', $petugass);
    }
     public function create()
{
      return View::make('petugas.create');
}

public function store()
{
      $rules = array(
            'email' => 'required',
            'password' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('petugas/create')->withErrors($validator)->withInput();
      } else {               
      DB::table('users')->insert(
      array(
                  'email' => Input::get('email'),
                  'password' => Input::get('password')
            )
            );
 
      Session::flash('message', 'Data Petugas Berhasil Ditambahkan!!!');
      return Redirect::to('petugas');
      }
}
public function edit($id)
{
      $petugassbyid = DB::table('users')->where('id',$id)->first();
      $petugassbyid =
      [
          'petugassbyid' => $petugassbyid
    ];
  return View::make('petugas.edit', $petugassbyid);
}
 
 
public function update($id)
{
      $rules = array(
             'email' => 'required',
            'password' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('petugas/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('users')
      ->where('id', $id)
      ->update(array(
					'email' => Input::get('email'),
                  'password' => Input::get('password')
            ));
 
      Session::flash('message', 'Data Petugas Berhasil Diubah!!!');
      return Redirect::to('petugas');
      }
}
public function destroy($id)
{
      DB::table('users')->where('id', '=', $id)->delete();
      Session::flash('message', 'Data Petugas Berhasil Dihapus!!!');
      return Redirect::to('petugas');
}
}
