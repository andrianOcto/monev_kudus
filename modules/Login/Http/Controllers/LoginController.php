<?php namespace Modules\Login\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class LoginController extends Controller {
	
	public function index()
	{
		return view('login::index');
	}
	
}