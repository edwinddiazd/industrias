<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('productos_id');
            $table->string('producto');
            $table->string('tipo_producto');
            $table->string('unidad_producto');
            $table->string('criticidad_producto');
            $table->longtext('descripcion_producto');
            $table->string('capacidad_instalada');
            $table->string('capacidad_operativa');
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
        Schema::drop('productos');
    }
}
