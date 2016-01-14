<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::get('/','DashboardController@index');

Route::get('/monitoring','MonitoringController@index');
Route::get('/kecamatan','KecamatanController@index');


// route master desa
Route::get('/desa','DesaController@index');
Route::post('/desa/add','DesaController@store');
Route::post('/desa/delete','DesaController@delete');
Route::post('/desa/update','DesaController@update');

// route master lahan
Route::get('/masterlahan','MasterLahanController@index');
Route::get('/tambahlahan','MasterLahanController@create');
Route::get('/editlahan/{id}','MasterLahanController@edit');
Route::post('/lahan/add','MasterLahanController@store');
Route::post('/lahan/update/{id}','MasterLahanController@update');
Route::post('/lahan/delete/','MasterLahanController@destroy');

// route master induk
Route::get('/detailinduk','MasterIndukController@show');
Route::get('/tambahdatainduk','MasterIndukController@create');
Route::get('/masterinduk','MasterIndukController@index');
// Route::get('/detaillahan','DetailLahanController@index');

Route::post('/upload','MasterLahanController@upload');

