<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolmatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solmat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('industrias_id')->unsigned();
            $table->integer('materias_id')->unsigned();
            $table->integer('productos_id')->unsigned();
            $table->foreign('industrias_id')->references('id')->on('industrias')
                ->onDelete('cascade');
            $table->foreign('materias_id')->references('id')->on('materias')
                ->onDelete('cascade');
            $table->foreign('productos_id')->references('id')->on('productos')
                ->onDelete('cascade');
            $table->boolean('criticidad_producto')->default(false);
            $table->integer('capacidad');
            $table->integer('solicitud');
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
        Schema::drop('solmat');
    }
}
