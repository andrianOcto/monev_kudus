<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder{
	public function run(){
		DB::table('users')->insert([

			'name' => 'deny salvana',
			'username' => 'deny',
			'password' => bcrypt('password'),
			'role'	   => 'admin',
			]);
	}
}