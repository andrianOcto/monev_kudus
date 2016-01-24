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

// route master kecamatan
Route::get('/kecamatan','KecamatanController@index')->middleware(['auth']);
Route::get('/tambahkecamatan','KecamatanController@create')->middleware(['auth']);
Route::post('/kecamatan/add','KecamatanController@store')->middleware(['auth']);
Route::post('/kecamatan/update/{id}','KecamatanController@update')->middleware(['auth']);
Route::post('/kecamatan/delete','KecamatanController@destroy')->middleware(['auth']);
Route::get('/editkecamatan/{id}','KecamatanController@edit')->middleware(['auth']);

// route master desa
Route::get('/desa','DesaController@index')->middleware(['auth']);
Route::get('/tambahdesa','DesaController@create')->middleware(['auth']);
Route::post('/desa/add','DesaController@store')->middleware(['auth']);
Route::post('/desa/delete','DesaController@delete')->middleware(['auth']);
Route::post('/desa/update/{id}','DesaController@update')->middleware(['auth']);
Route::get('/editdesa/{id}','DesaController@edit')->middleware(['auth']);
Route::get('/desa/{id}', 'DesaController@getDesa');

// route master lahan
Route::get('/detaillahan/{id}','MasterLahanController@show')->middleware(['auth']);
Route::get('/masterlahan','MasterLahanController@index')->middleware(['auth']);
Route::get('/tambahlahan','MasterLahanController@create')->middleware(['auth']);
Route::get('/editlahan/{id}','MasterLahanController@edit')->middleware(['auth']);
Route::post('/lahan/add','MasterLahanController@store')->middleware(['auth']);
Route::post('/lahan/update/{id}','MasterLahanController@update')->middleware(['auth']);
Route::post('/lahan/delete/','MasterLahanController@destroy')->middleware(['auth']);
Route::get('/lahan/export','MasterLahanController@export');

// route master induk
Route::get('/detailinduk/{id}','MasterIndukController@show')->middleware(['auth']);
Route::get('/tambahdatainduk','MasterIndukController@create')->middleware(['auth']);
Route::get('/masterinduk','MasterIndukController@index')->middleware(['auth']);
Route::post('/induk/add','MasterIndukController@store')->middleware(['auth']);
Route::post('/induk/delete/','MasterIndukController@destroy')->middleware(['auth']);
Route::get('/editinduk/{id}','MasterIndukController@edit')->middleware(['auth']);
Route::post('/induk/update/{id}','MasterIndukController@update')->middleware(['auth']);
Route::get('/masterinduk/export', 'MasterIndukController@export');

// route master users
Route::get('/users','UserController@index')->middleware(['auth']);
Route::get('/tambahuser','UserController@create')->middleware(['auth']);
Route::get('/edituser/{id}','UserController@edit')->middleware(['auth']);
Route::post('/users/add','UserController@store')->middleware(['auth']);
Route::post('/users/update/{id}','UserController@update')->middleware(['auth']);
Route::post('/users/delete/','UserController@destroy')->middleware(['auth']);


//route monitoring
Route::get('/monitoring','MonitoringController@index')->middleware(['auth']);
Route::post('/monitoring','MonitoringController@updatePage')->middleware(['auth']);

// route master perijinan
Route::get('/perijinan','PerijinanController@index')->middleware(['auth']);
Route::get('/tambahperijinan','PerijinanController@create')->middleware(['auth']);
Route::get('/editperijinan/{id}','PerijinanController@edit')->middleware(['auth']);
Route::post('/perijinan/add','PerijinanController@store')->middleware(['auth']);
Route::post('/perijinan/update/{id}','PerijinanController@update')->middleware(['auth']);
Route::post('/perijinan/delete/','PerijinanController@destroy')->middleware(['auth']);
Route::get('/perijinan/export','PerijinanController@export');

