<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class KecamatanTableSeeder extends Seeder{
	public function run(){
		DB::table('kecamatan')->insert([

			'kecamatan' => 'Kota',
			'luas' => 2.4

			]);
	}
}