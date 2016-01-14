<?php

Route::group(['prefix' => 'login', 'namespace' => 'Modules\Login\Http\Controllers'], function()
{
	Route::get('/', 'LoginController@index');
});