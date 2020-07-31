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
            $table->string('nombre_tutor_madres',100);
            $table->string('apellido_paterno_tutor',50);
            $table->string('apellido_materno_tutor',50);
            $table->string('domicilio_delegracion',150);
            $table->string('tipo_nomina_1',30);
            $table->string('num_empleado_1',50);
            $table->string('num_plaza_1',50);
            $table->string('clave_dependencia_1',100);
            $table->string('nivel_salarial_1',50);
            $table->string('seccion_sindical_1',50);
            $table->string('horario_laboral_ent',50);
            $table->string('horario_laboral_sal',50);
            $table->string('birthday');
            $table->string('Edad_menor',10);
            $table->string('email_correo',100);
            $table->string('telefono_celular',15);
            $table->string('telefono_3',15);
            $table->string('nombre_menor_1',100);
            $table->string('apellido_paterno_1',50);
            $table->string('apellido_materno_1',50);
            $table->string('curp_num',20);
            $table->string('caci',150);
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
