<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrokerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creando mi primera tabla
        Schema::create('Broker', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('industrias_id')->unsigned();
            $table->foreign('industrias_id')->references('id')->on('industrias')->onDelete('cascade');
            $table->string('nombre');
            $table->longtext('direccion');
            $table->string('correo');
            $table->string('tlf1');
            $table->string('tlf2');
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
        Schema::drop('Broker');
    }
}
