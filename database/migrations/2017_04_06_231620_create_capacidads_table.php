<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacidads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('industrias_id')->unsigned();
            $table->integer('productos_id')->unsigned();
            $table->boolean('criticidad_producto');
            $table->string('capacidad_instalada');
            $table->string('capacidad_operativa');
            $table->foreign('productos_id')->references('id')->on('productos')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('industrias_id')->references('id')->on('industrias')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('capacidads');
    }
}
