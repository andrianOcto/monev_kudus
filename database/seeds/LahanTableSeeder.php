<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LahanTableSeeder extends Seeder{
	public function run(){
		DB::table('lahan')->insert([

			'jenis' => 1,
			'kecamatan' => 1,
			'keterangan' => 'keterangan in here',
			'path_peta' => str_random(10).'jpg',
			'tahun' => 2009,
			'kcp2b' => 0.9,
			'cagar_budaya' => 0.9,
			'lindung_spiritual' => 0.9,
			'hutan_rakyat' => 0.9,
			'hutan_lindung' => 0.9,
			'industri' => 0.9,
			'pertanian_tanaman' => 0.9,
			'hutan_produksi' => 0.9,
			'hutan_produksi_terbatas' => 0.9,
			'pariwisata' => 0.9,
			'pertambangan' => 0.9,
			'tanaman_pangan' => 0.9,
			'pemukiman_pedesaan' => 0.9,
			'pemukiman_perkotaan' => 0.9,
			'tpa' => 0.9,
			'sekitar_waduk' => 0.9,
			'sekitar_mataair' => 0.9,
			'sempadan_sungai' => 0.9,

			]);
	}
}