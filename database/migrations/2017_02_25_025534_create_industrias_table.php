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
            $table->string('industria');
            $table->string('rif_industria');
            $table->string('telefono1_industria');
            $table->string('telefono2_industria');
            $table->longtext('direccion_industria');
            $table->string('tipo_industria');
            $table->timestamps();
        });

        Schema::create('industrias_productos', function (Blueprint $table) {
            $table->integer('industrias_id')->unsigned();
            $table->integer('productos_id')->unsigned();

            $table->foreign('industrias_id')->references('id')->on('industrias')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('productos_id')->references('id')->on('productos')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['industrias_id', 'productos_id']);
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
