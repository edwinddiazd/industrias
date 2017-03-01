<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personal', function (Blueprint $table) {
            $table->increments('Personal_id');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('industrias')->onDelete('cascade');
            $table->string('cargo_personal');
            $table->string('nombre_personal');
            $table->string('apellido_personal');
            $table->string('cedula_personal');
            $table->string('email_personal');
            $table->string('telefono1_personal');
            $table->string('telefono2_personal');
            $table->longtext('direccion_personal');
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
        Schema::drop('Personal');
    }
}
