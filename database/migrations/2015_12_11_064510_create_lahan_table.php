<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lahan',function(Blueprint $table){
            $table->increments('id');
            $table->integer('jenis');
            $table->integer('kecamatan');
            $table->text('keterangan');
            $table->string('path_peta');
            $table->integer('tahun');
            
            // data luasan
            //kawasan lindung
            $table->float('hutan_lindung');
            $table->float('kawasan_bawahan');
            $table->float('sempadan_sungai');
            $table->float('sekitar_danauwaduk');
            $table->float('sekitar_mataair');
            $table->float('lindung_spiritual');
            $table->float('rth');
            $table->float('cagar_budaya');
            $table->float('rawan_bencana');
            $table->float('lindung_geologi');
            //kawasan budidaya
            $table->float('hutan_produksi');
            $table->float('hutan_rakyat');
            $table->float('pertanian');
            $table->float('perikanan');
            $table->float('pertambangan');
            $table->float('industri');
            $table->float('pariwisata');
            $table->float('pemukiman');
            $table->float('perkebunan');
            $table->float('pertahanan');

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
        Schema::drop('lahan');
    }
}
