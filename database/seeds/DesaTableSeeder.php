<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DesaTableSeeder extends Seeder{
	public function run(){
		DB::table('desa')->insert(['kecamatan'=> 1 , 'desa' => 'Rendeng']);
		DB::table('desa')->insert(['kecamatan'=> 1 , 'desa' => 'Purwosari']);
		DB::table('desa')->insert(['kecamatan'=> 2 , 'desa' => 'Dersalam']);
		DB::table('desa')->insert(['kecamatan'=> 2 , 'desa' => 'Pedawang']);
		DB::table('desa')->insert(['kecamatan'=> 2 , 'desa' => 'Gondangmanis']);
		DB::table('desa')->insert(['kecamatan'=> 3 , 'desa' => 'Tanjungkarang']);
		DB::table('desa')->insert(['kecamatan'=> 3 , 'desa' => 'Loram Kulon']);
		DB::table('desa')->insert(['kecamatan'=> 3 , 'desa' => 'Jati Wetan']);
		DB::table('desa')->insert(['kecamatan'=> 3 , 'desa' => 'Jati Kulon']);
		DB::table('desa')->insert(['kecamatan'=> 3 , 'desa' => 'Pasuruhan Lor']);
		DB::table('desa')->insert(['kecamatan'=> 3 , 'desa' => 'Getas Pejaten']);
		DB::table('desa')->insert(['kecamatan'=> 3 , 'desa' => 'Megawon']);
	}
}