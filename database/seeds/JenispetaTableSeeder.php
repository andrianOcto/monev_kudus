<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class JenispetaTableSeeder extends Seeder{
	public function run(){
		DB::table('jenis_peta')->insert([

			['jenis' => 'Administrasi'],
			['jenis' => 'Pola Ruang'],
			['jenis' => 'Landuse']

			]);
	}
}