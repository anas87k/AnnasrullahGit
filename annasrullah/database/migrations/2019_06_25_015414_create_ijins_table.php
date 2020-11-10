<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIjinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ijins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_santri');
            $table->date('tglijin');
            $table->time('jamijin');
            $table->date('tglkmb');
            $table->time('jamkmb');
            $table->string('alasan', 255);
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
        Schema::dropIfExists('ijins');
    }
}
