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


Route::get('/','DashboardController@index')->middleware(['auth']);

Route::get('/monitoring','MonitoringController@index')->middleware(['auth']);
Route::get('/kecamatan','KecamatanController@index')->middleware(['auth']);


// route master desa
Route::get('/desa','DesaController@index')->middleware(['auth']);
Route::post('/desa/add','DesaController@store')->middleware(['auth']);
Route::post('/desa/delete','DesaController@delete')->middleware(['auth']);
Route::post('/desa/update','DesaController@update')->middleware(['auth']);

// route master lahan
Route::get('/masterlahan','MasterLahanController@index')->middleware(['auth']);
Route::get('/tambahlahan','MasterLahanController@create')->middleware(['auth']);
Route::get('/editlahan/{id}','MasterLahanController@edit')->middleware(['auth']);
Route::post('/lahan/add','MasterLahanController@store')->middleware(['auth']);
Route::post('/lahan/update/{id}','MasterLahanController@update')->middleware(['auth']);
Route::post('/lahan/delete/','MasterLahanController@destroy')->middleware(['auth']);

// route master induk
Route::get('/detailinduk','MasterIndukController@show')->middleware(['auth']);
Route::get('/tambahdatainduk','MasterIndukController@create')->middleware(['auth']);
Route::get('/masterinduk','MasterIndukController@index')->middleware(['auth']);
// Route::get('/detaillahan','DetailLahanController@index');

Route::post('/upload','MasterLahanController@upload')->middleware(['auth']);

Route::get('/users','UserController@index');