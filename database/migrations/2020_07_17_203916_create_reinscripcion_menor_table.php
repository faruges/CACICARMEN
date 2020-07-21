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
            $table->string('curp',20);
            $table->date('fecha_nacimiento');
            $table->string('edad_menor_ingreso',10);
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
