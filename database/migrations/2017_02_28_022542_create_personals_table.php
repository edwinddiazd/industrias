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
            $table->integer('industrias_id')->unsigned();
            $table->foreign('industrias_id')->references('industrias_id')->on('industrias')->onDelete('cascade');
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
        Schema::drop('personals');
    }
}
