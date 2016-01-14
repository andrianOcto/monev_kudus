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
            $table->float('kcp2b');
            $table->float('cagar_budaya');
            $table->float('lindung_spiritual');
            $table->float('hutan_rakyat');
            $table->float('hutan_lindung');
            $table->float('industri');
            $table->float('pertanian_tanaman');
            $table->float('hutan_produksi');
            $table->float('hutan_produksi_terbatas');
            $table->float('pariwisata');
            $table->float('pertambangan');
            $table->float('tanaman_pangan');
            $table->float('pemukiman_pedesaan');
            $table->float('pemukiman_perkotaan');
            $table->float('tpa');
            $table->float('sekitar_waduk');
            $table->float('sekitar_mataair');
            $table->float('sempadan_sungai');

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
        //
    }
}
