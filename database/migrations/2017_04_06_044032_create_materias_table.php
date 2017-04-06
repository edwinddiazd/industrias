<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->longtext('descripcion');
            $table->string('unidad');            
            $table->timestamps();
        });

        Schema::create('industrias_materias', function (Blueprint $table) {
            $table->integer('industrias_id')->unsigned();
            $table->integer('materias_id')->unsigned();

            $table->foreign('industrias_id')->references('id')->on('industrias')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('materias_id')->references('id')->on('materias')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['industrias_id', 'materias_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('materias');
    }
}
