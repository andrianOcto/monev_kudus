<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('induk',function(Blueprint $table){
            $table->increments('id');
            $table->integer('jenis');
            $table->integer('kecamatan');
            $table->text('keterangan');
            $table->string('path_peta');
            $table->integer('tahun');
            
            // data luasan
            //kawasan lindung
            $table->float('hutan_lindung')->nullable();
            $table->float('kawasan_bawahan')->nullable();
            $table->float('sempadan_sungai')->nullable();
            $table->float('sekitar_danauwaduk')->nullable();
            $table->float('sekitar_mataair')->nullable();
            $table->float('lindung_spiritual')->nullable();
            $table->float('rth')->nullable();
            $table->float('cagar_budaya')->nullable();
            $table->float('rawan_bencana')->nullable();
            $table->float('lindung_geologi')->nullable();
            //kawasan budidaya
            $table->float('hutan_produksi')->nullable();
            $table->float('hutan_rakyat')->nullable();
            $table->float('pertanian')->nullable();
            $table->float('perikanan')->nullable();
            $table->float('pertambangan')->nullable();
            $table->float('industri')->nullable();
            $table->float('pariwisata')->nullable();
            $table->float('pemukiman')->nullable();
            $table->float('perkebunan')->nullable();
            $table->float('pertahanan')->nullable();

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
        Schema::drop('induk');
    }
}
