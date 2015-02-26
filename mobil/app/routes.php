<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});

Route::controller("login", "LoginController");
Route::controller("register", "RegisterController");
Route::controller("forgot", "ForgotController");
Route::get('dashboard', 'DashboardController@index');
Route::get('pembeli', 'PembeliController@index');
Route::get('pembeli2', 'PembeliController@index2');
Route::get('pembeli/create','PembeliController@create');
Route::post('pembeli/create','PembeliController@store');
Route::get('pembeli/edit/{id}', 'PembeliController@edit');
Route::post('pembeli/update/{id}', array('as' => 'pembeli.update', 'uses' => 'PembeliController@update'));
Route::get('pembeli/destroy/{id}','PembeliController@destroy');
Route::get('mobil', 'MobilController@index');
Route::get('mobil/create','MobilController@create');
Route::post('mobil/create','MobilController@store');
Route::get('mobil/edit/{id}', 'MobilController@edit');
Route::post('mobil/update/{id}', array('as' => 'mobil.update', 'uses' => 'MobilController@update'));
Route::get('mobil/destroy/{id}','MobilController@destroy');
Route::get('paket', 'PaketKreditController@index');
Route::get('paket/create','PaketKreditController@create');
Route::post('paket/create','PaketKreditController@store');
Route::get('paket/edit/{id}', 'PaketKreditController@edit');
Route::post('paket/update/{id}', array('as' => 'paket.update', 'uses' => 'PaketKreditController@update'));
Route::get('paket/destroy/{id}','PaketKreditController@destroy');
Route::get('cash', 'CashController@index');
Route::get('cash2', 'CashController@index2');
Route::get('cash/create','CashController@create');
Route::post('cash/create','CashController@store');
Route::get('cash/edit/{id}', 'CashController@edit');
Route::post('cash/update/{id}', array('as' => 'cash.update', 'uses' => 'CashController@update'));
Route::get('cash/destroy/{id}','CashController@destroy');
Route::get('kredit', 'KreditController@index');
Route::get('kredit2', 'KreditController@index2');
Route::get('kredit/create','KreditController@create');
Route::post('kredit/create','KreditController@store');
Route::get('kredit/edit/{id}', 'KreditController@edit');
Route::post('kredit/update/{id}', array('as' => 'kredit.update', 'uses' => 'KreditController@update'));
Route::get('kredit/destroy/{id}','KreditController@destroy');
Route::get('cicilan', 'CicilanController@index');
Route::get('cicilan2', 'CicilanController@index2');
Route::get('cicilan/create','CicilanController@create');
Route::post('cicilan/create','CicilanController@store');
Route::get('cicilan/edit/{id}', 'CicilanController@edit');
Route::post('cicilan/update/{id}', array('as' => 'cicilan.update', 'uses' => 'CicilanController@update'));
Route::get('cicilan/destroy/{id}','CicilanController@destroy');
Route::get('panduan', 'PanduanController@index');
Route::get('panduan2', 'PanduanController@index2');
Route::get('beli1/create','BeliMobilController@create1');
Route::post('beli1/create','BeliMobilController@store1');
Route::get('beli1/create2','BeliMobilController@create2');
Route::post('beli1/create2','BeliMobilController@store2');
Route::get('beli2/create','BeliKreditController@create3');
Route::post('beli2/create','BeliKreditController@store3');
Route::get('beli2/create2','BeliKreditController@create4');
Route::post('beli2/create2','BeliKreditController@store4');
Route::get('beli2/create3','BeliKreditController@create5');
Route::post('beli2/create3','BeliKreditController@store5');
Route::get('petugas', 'PetugasController@index');
Route::get('petugas/create','PetugasController@create');
Route::post('petugas/create','PetugasController@store');
Route::get('petugas/edit/{id}', 'PetugasController@edit');
Route::post('petugas/update/{id}', array('as' => 'petugas.update', 'uses' => 'PetugasController@update'));
Route::get('petugas/destroy/{id}','PetugasController@destroy');
Route::get('mobil2', 'MobilController@index2');
Route::get('paket2', 'PaketKreditController@index2');


Route::group(array('before' => 'auth'), function()
{
	Route::get('kota', 'KotaController@index');
Route::get('logout', array('uses' => 'UserController@logout'));
 
// Route yang ingin diproteksi taruh disini
});
Route::get('login', array('uses' => 'UserController@login'));
Route::post('login', array('uses' => 'UserController@doLogin'));
Route::get('login2', array('uses' => 'UsersController@login2'));
Route::post('login2', array('uses' => 'UsersController@doLogin2'));