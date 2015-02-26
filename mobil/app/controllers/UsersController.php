<?php
 
class UsersController extends BaseController {
     public function login2()
    {
                    return View::make('loginadmin');
    }
     
     public function doLogin2()
    {
        $rules = array(
                        'username'    => 'required',
                        'password' => 'required|alphaNum|min:5'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
                        return Redirect::to('loginadmin')
                                        ->withErrors($validator)
                                        ->withInput(Input::except('password'));
        } else {
                        $userdata = array(
                                        'username'   => Input::get('username'),
                                        'password'          => Input::get('password')
                        );
                        if (Auth::attempt($userdata)) {
                                        return Redirect::to('pembeli');
                        } else {               
                                        return Redirect::to('pembeli');
                        }
        }
    }
 
 
    public function logout()
    {
        Auth::logout();
        return Redirect::to('loginadmin');
    }
}