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

Route::get('/','DashboardController@index');
Route::get('/users','UserController@index');
Route::get('/masterinduk','MasterIndukController@index');
Route::get('/masterlahan','MasterLahanController@index');
Route::get('/monitoring','MonitoringController@index');
Route::get('/kecamatan','KecamatanController@index');
Route::get('/desa','DesaController@index');
Route::get('/detailinduk','DetailIndukController@index');
// Route::get('/detaillahan','DetailLahanController@index');
Route::get('/tambahlahan','AddLahanController@index');
Route::get('/editlahan','EditLahanController@index');
Route::get('/tambahdatainduk','AddDataIndukController@index');

Route::get('/login','LoginController@index');
