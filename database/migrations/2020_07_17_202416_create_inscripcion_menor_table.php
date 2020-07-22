<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionMenorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_menor', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre_menor',100);
            $table->string('ap_paterno',50);
            $table->string('ap_materno',50);
            $table->string('curp',20);
            $table->date('fecha_nacimiento');
            $table->string('edad_menor_ingreso',10);
            $table->unsignedInteger('inscripcion_tutor_id');
            $table->foreign('inscripcion_tutor_id')->references('id')->on('inscripcion_tutor')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('inscripcion_menor');
    }
}
