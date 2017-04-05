<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasPrimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_primas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->longtext('descripcion');            
            $table->timestamps();
        });

        Schema::create('industria_materia', function (Blueprint $table) {
            $table->integer('industria_id')->unsigned();
            $table->integer('materia_id')->unsigned();

            $table->foreign('industria_id')->references('id')->on('industrias')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('materia_id')->references('id')->on('materias_primas')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['industria_id', 'materia_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('materias_primas');
    }
}
