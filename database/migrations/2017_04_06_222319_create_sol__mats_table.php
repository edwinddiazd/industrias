<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolMatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sol__mats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('industrias_id')->unsigned();
            $table->integer('materias_id')->unsigned();
            $table->integer('productos_id')->unsigned();
            $table->foreign('industrias_id')->references('id')->on('industrias')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('materias_id')->references('id')->on('materias')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('productos_id')->references('id')->on('productos')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('capacidad');            

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
        Schema::drop('sol__mats');
    }
}
