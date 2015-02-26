<?php
class CrudController extends BaseController {
   public function index()
    {
        $profiles = DB::table('profiles')->paginate(5);
        $profiles =
        [
            'profiles' => $profiles
        ];
        return View::make('crud.index', $profiles);
    }
 
 public function create()
{
      return View::make('crud.create');
}
 
public function store()
{
      $rules = array(
            'nama' => 'required',
            'jeniskelamin' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            return Redirect::to('crud/create')->withErrors($validator)->withInput();
      } else {               
      DB::table('profiles')->insert(
      array(
                  'nama' => Input::get('nama'),
                  'jeniskelamin' => Input::get('jeniskelamin'),
                  'alamat' => Input::get('alamat')
            )
            );
 
      Session::flash('message', 'Data Berhasil Ditambahkan');
      return Redirect::to('crud');
      }
}
public function edit($id)
{
      $profilesbyid = DB::table('profiles')->where('id',$id)->first();
      $profilesbyid =
      [
          'profilesbyid' => $profilesbyid
    ];
  return View::make('crud.edit', $profilesbyid);
}
 
 
public function update($id)
{
      $rules = array(
            'nama' => 'required',
            'jeniskelamin' => 'required',
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('crud/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('profiles')
      ->where('id', $id)
      ->update(array(
                  'nama' => Input::get('nama'),
                  'jeniskelamin' => Input::get('jeniskelamin'),
                  'alamat' => Input::get('alamat')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('crud');
      }
}
public function destroy($id)
{
      DB::table('profiles')->where('id', '=', $id)->delete();
      Session::flash('message', 'Data Berhasil Dihapus');
      return Redirect::to('crud');
}
}