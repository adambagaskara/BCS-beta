<?php
 
class UserController extends BaseController {
 
    public function login()
    {
                    return View::make('login');
    }
 
    public function doLogin()
    {
        $rules = array(
                        'email'    => 'required|email',
                        'password' => 'required|alphaNum|min:5'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
                        return Redirect::to('login')
                                        ->withErrors($validator)
                                        ->withInput(Input::except('password'));
        } else {
                        $userdata = array(
                                        'email'   => Input::get('email'),
                                        'password'          => Input::get('password')
                        );
                        if (Auth::attempt($userdata)) {
                                        return Redirect::to('pembeli');
                        } else {               
                                        return Redirect::to('dashboard');
                        }
        }
    }
  public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
}