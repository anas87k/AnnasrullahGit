<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_santri');
            $table->string('nama_lengkap', 255); 
            $table->enum('jk', ['L','P']);
            $table->string('tempat');
            $table->date('tgl');
            $table->string('umur');
            $table->string('pendidikan'); 
            $table->string('nama_pendidikan', 255);
            $table->string('nama_ortu');
            $table->string('pkrjn_ortu', 255);
            $table->string('alamat_ortu'); 
            $table->string('telp_ortu', 15);
            $table->string('nama_wali');
            $table->string('pkrjn_wali', 255);
            $table->string('alamat_wali'); 
            $table->string('telp_wali', 15);
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
        Schema::dropIfExists('daftars');
    }
}
