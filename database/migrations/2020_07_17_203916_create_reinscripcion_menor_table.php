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
            $table->string('rfc',13);
            $table->string('nombre_tutor',100);
            $table->string('ap_paterno_t',50);
            $table->string('ap_materno_t',50);
            $table->string('calle',150);
            $table->string('numero_domicilio',20);
            $table->string('colonia',100);
            $table->string('alcaldia',100);
            $table->string('codigo_postal',20);
            $table->string('tipo_nomina',30);
            $table->string('num_empleado',50);
            $table->string('num_plaza',50);
            $table->string('clave_dependencia',100);
            $table->string('nivel_salarial',50);
            $table->string('seccion_sindical',50);
            $table->string('horario_laboral_ent',50);
            $table->string('horario_laboral_sal',50);
            $table->string('email',100);
            $table->string('telefono_uno',15);
            $table->string('telefono_dos',15);
            $table->string('nombre_menor',100);
            $table->string('ap_paterno',50);
            $table->string('ap_materno',50);
            $table->string('fecha_nacimiento');
            $table->string('edad_menor_ingreso',10);
            $table->string('curp',20);
            $table->string('caci',150);
            $table->string('terminos',20)->nullable();
            $table->string('rol_caci',100)->nullable();
            $table->tinyInteger('correo_enviado')->nullable();
            $table->tinyInteger('correo_enviado_not_recibida')->nullable();
            $table->tinyInteger('correo_enviado_not_recibida_reinscr')->nullable();
            $table->string('ciclo_escolar',10)->nullable();
            $table->tinyInteger('status');
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
