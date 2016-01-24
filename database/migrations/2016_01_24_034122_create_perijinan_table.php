<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerijinanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perijinan', function (Blueprint $table){
            $table->increments('id');
            $table->string('pemanfaatan_ruang');
            $table->string('pemilik');
            $table->integer('kecamatan');
            $table->integer('desa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('perijinan');
    }
}
