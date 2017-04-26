<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('industrias_id')->unsigned();
            $table->foreign('industrias_id')->references('id')->on('industrias')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('productos_id')->unsigned();
            $table->foreign('productos_id')->references('id')->on('productos')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('produccion');
            $table->integer('bolivares');
            $table->integer('dolares');
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
        Schema::drop('produccions');
    }
}
