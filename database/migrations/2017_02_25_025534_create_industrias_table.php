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
            $table->increments('id');
            $table->string('nombre');
            $table->string('rif');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->longtext('direccion');
            $table->timestamps();
        });

        Schema::create('Personal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('email');
            $table->string('telefono1');
            $table->string('telefono2');
            $table->longtext('direccion');
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
