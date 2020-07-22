<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReinscripcionMenorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reinscripcion_menor', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('matricula',100);
            $table->string('nombre_menor',100);
            $table->string('ap_paterno',50);
            $table->string('ap_materno',50);
            $table->date('fecha_nacimiento');
            $table->string('edad_menor_ingreso',10);
            $table->string('curp',20);
            $table->unsignedInteger('reinscripcion_tutor_id');
            $table->foreign('reinscripcion_tutor_id')->references('id')->on('reinscripcion_tutor')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('reinscripcion_menor');
    }
}
