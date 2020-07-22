<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_tutor', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('rfc',20);
            $table->string('nombre_tutor',100);
            $table->string('ap_paterno_t',50);
            $table->string('ap_materno_t',50);
            $table->string('domicilio',150);
            $table->string('tipo_nomina',30);
            $table->string('num_empleado',50);
            $table->string('num_plaza',50);
            $table->string('clave_dependencia',50);
            $table->string('nivel_salarial',50);
            $table->string('seccion_sindical',50);
            $table->string('horario_laboral_ent',50);
            $table->string('horario_laboral_sal',50);
            $table->string('email',100)->unique();
            $table->string('telefono_uno',15);
            $table->string('telefono_dos',15);
            $table->unsignedInteger('caci_id');
            $table->foreign('caci_id')->references('id')->on('caci')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('inscripcion_tutor');
    }
}
