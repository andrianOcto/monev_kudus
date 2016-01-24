<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PerijinanTableSeeder extends Seeder{
	public function run(){
		DB::table('perijinan')->insert([

			'pemanfaatan_ruang' => 'Pembangunan Kantor dan Tempat Usaha Pengumpulan Barang Bekas',
			'pemilik' => 'CV. Putra Jaya',
			'kecamatan' => 1,
			'desa' => 1

			]);
	}
}