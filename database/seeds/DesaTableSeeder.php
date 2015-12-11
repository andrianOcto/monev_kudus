<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DesaTableSeeder extends Seeder{
	public function run(){
		DB::table('desa')->insert([

			'kecamatan' => 1,
			'desa' => 'Tanjung',
			'luas' => 0.98

			]);
	}
}