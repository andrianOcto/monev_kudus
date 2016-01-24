<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(KecamatanTableSeeder::class);
        $this->call(DesaTableSeeder::class);
        $this->call(JenispetaTableSeeder::class);
        $this->call(LahanTableSeeder::class);
        $this->call(PerijinanTableSeeder::class);

        Model::reguard();
    }
}
