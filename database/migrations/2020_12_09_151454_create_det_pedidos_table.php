<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('costo');

            $table->unsignedInteger('id_plato');
            $table->foreign('id_plato')->references('id')->on('platos');

            $table->unsignedInteger('id_pedidos');
            $table->foreign('id_pedidos')->references('id')->on('pedidos');

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
        Schema::dropIfExists('det_pedidos');
    }
}
