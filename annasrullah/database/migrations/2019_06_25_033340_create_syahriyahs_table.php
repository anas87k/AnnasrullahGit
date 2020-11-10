<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyahriyahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syahriyahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_santri')->unique();
            $table->string('id_syahriyah');
            $table->string('bulan'); 
            $table->string('jumlah');
            $table->enum('status', ['Y','N'])->default('N');
            $table->date('tgl');
            $table->string('bukti', 255)->default('noimage.jpg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syahriyahs');
    }
}
