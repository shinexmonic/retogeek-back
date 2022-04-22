<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->longText('descripcion');
            $table->date('fecha_limite');
            $table->longText('observaciones')->nullable();
            $table->bigInteger('id_trabajador')->unsigned();
            $table->bigInteger('id_estado')->unsigned();
            $table->timestamps();

            $table->foreign('id_trabajador')->on('trabajadores')->references('id');
            $table->foreign('id_estado')->on('estados')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
