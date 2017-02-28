<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrias', function (Blueprint $table) {
            $table->increments('industrias_id');
            $table->string('industria');
            $table->string('rif_industria');
            $table->string('telefono1_industria');
            $table->string('telefono2_industria');
            $table->longtext('direccion_industria');
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
        Schema::drop('industrias');
    }
}
