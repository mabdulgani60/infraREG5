<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wilayah');
            $table->string('lokasi');
            $table->string('tipe_perangkat');
            $table->string('merk');
            $table->string('tipe');
            $table->string('jenis_perangkat');
            $table->string('nomor_serial');
            $table->string('kap_tps');
            $table->string('kap_tpk');
            $table->string('status');
            $table->string('tahun_operasi');
            $table->string('ruangan');
            $table->string('keterangan');
            $table->string('beban_terpasang');
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
        Schema::dropIfExists('plns');
    }
}
