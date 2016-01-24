<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class KecamatanTableSeeder extends Seeder{
	public function run(){
		DB::table('kecamatan')->insert(['kecamatan' => 'Kota','luas' => 2.4]);
		DB::table('kecamatan')->insert(['kecamatan'=>'Bae', 'luas'=> 3.4]);
		DB::table('kecamatan')->insert(['kecamatan'=>'Jati', 'luas'=> 3.4]);
		DB::table('kecamatan')->insert(['kecamatan'=>'Kaliwungu', 'luas'=> 3.4]);
		DB::table('kecamatan')->insert(['kecamatan'=>'Gebog', 'luas'=> 3.4]);
		DB::table('kecamatan')->insert(['kecamatan'=>'Mejobo', 'luas'=> 3.4]);
		DB::table('kecamatan')->insert(['kecamatan'=>'Jekulo', 'luas'=> 3.4]);
		DB::table('kecamatan')->insert(['kecamatan'=>'Dawe', 'luas'=> 3.4]);
		DB::table('kecamatan')->insert(['kecamatan'=>'Undaan', 'luas'=> 3.4]);
		DB::table('kecamatan')->insert(['kecamatan'=>'Kabupaten Kudus', 'luas'=> 3.4, 'id'=>15]);
	}
}























