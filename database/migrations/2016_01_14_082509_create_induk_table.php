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
            $table->float('kcp2b')->nullable();
            $table->float('cagar_budaya')->nullable();
            $table->float('lindung_spiritual')->nullable();
            $table->float('hutan_rakyat')->nullable();
            $table->float('hutan_lindung')->nullable();
            $table->float('industri')->nullable();
            $table->float('pertanian_tanaman')->nullable();
            $table->float('hutan_produksi')->nullable();
            $table->float('hutan_produksi_terbatas')->nullable();
            $table->float('pariwisata')->nullable();
            $table->float('pertambangan')->nullable();
            $table->float('tanaman_pangan')->nullable();
            $table->float('pemukiman_pedesaan')->nullable();
            $table->float('pemukiman_perkotaan')->nullable();
            $table->float('tpa')->nullable();
            $table->float('sekitar_waduk')->nullable();
            $table->float('sekitar_mataair')->nullable();
            $table->float('sempadan_sungai')->nullable();

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
