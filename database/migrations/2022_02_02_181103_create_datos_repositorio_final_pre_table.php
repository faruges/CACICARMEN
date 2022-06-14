<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosRepositorioFinalPreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_repositorio_final_pre', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('inscripcion_menor_id');
            $table->foreign('inscripcion_menor_id')->references('id')->on('inscripcion_menor')->onDelete('restrict')->onUpdate('restrict');
            /** Datos llenados por personal caci */
            $table->string('caci',80);
            $table->string('detec_nutricion',150)->nullable();
            $table->string('fecha_preins',30)->nullable();
            $table->string('matricula',30)->nullable();
            $table->string('grupo_nino',30)->nullable();
            $table->string('fecha_baja_nino',30)->nullable();
            $table->string('fecha_cambio_caci',30)->nullable();
            /** Datos de las niñas o niños */
            $table->string('nombre_comple_nino',150);
            $table->string('edad_nino',5);
            $table->string('curp_nino',18);
            $table->string('fecha_nac_nino',30);
            $table->string('genero_nino',30)->nullable();
            $table->string('entidad_naci_nino',150)->nullable();
            $table->string('anio_registro_nac_nino',4)->nullable();
            $table->string('alcaldia_registro_nino',100)->nullable();
            $table->string('num_acta_nac_nino',20)->nullable();
            $table->string('libro_act_nac_nino',20)->nullable();
            $table->string('domicilio_part_nino',200)->nullable();
            $table->string('numero_domici_nino',50)->nullable();
            $table->string('colonia_nino',150)->nullable();
            $table->string('alcaldia_nino',150)->nullable();
            $table->string('codigo_postal_nino',5)->nullable();
            $table->string('telefono_recado_nino',10);
            $table->string('discapacidad_nino',200)->nullable();
            $table->string('padecimiento_nino',200)->nullable();
            $table->string('necesidades_nino',250)->nullable();
            $table->string('institucion_nino',100)->nullable();
            $table->string('derechohabiencia_nino',100)->nullable();
            $table->string('alergia_nino',100)->nullable();
            $table->string('grupo_sanguineo',30)->nullable();
            /** Datos de la madre, padre y/o persona tutora*/
            $table->string('nombre_completo_padre',150);
            $table->string('rfc_padre',13);
            $table->string('curp_padre',18);
            $table->string('genero_padre',30)->nullable();
            $table->string('entidad_nac_padre',150)->nullable();
            $table->string('fecha_nac_padre',30)->nullable();
            $table->string('edad_padre',3)->nullable();
            $table->string('edo_civil_padre',20)->nullable();
            $table->string('nivel_escolar_padre',20)->nullable();
            $table->string('conclusion_nive_esco_padre',20)->nullable();
            $table->string('parentesco_con_nino',20)->nullable();
            $table->string('domicilio_calle_padre',150);
            $table->string('numero_domici_padre',50);
            $table->string('colonia_padre',150);
            $table->string('alcaldia_padre',150);
            $table->string('codigo_postal_padre',5);
            $table->string('tel_particular_padre',10);
            $table->string('tel_celular_padre',10);
            $table->string('tel_recados_padre',10)->nullable();
            $table->string('email_padre',150);
            $table->string('clave_sector_padre',70);
            $table->string('ente_administrativo_padre',70);
            $table->string('nombre_unidad_administrativa_padre',100);
            $table->string('clave_unidad_admin_padre',70);
            $table->string('area_adscripcion_padre',80)->nullable();
            $table->string('descripcion_puesto_padre',200);
            $table->string('funcion_real_padre',100)->nullable();
            $table->string('domicilio_calle_laboral_padre',200)->nullable();
            $table->string('num_laboral_padre',50)->nullable();
            $table->string('colonia_laboral_padre',150)->nullable();
            $table->string('alcaldia_laboral_padre',150)->nullable();
            $table->string('codigo_postal_laboral_padre',5)->nullable();
            $table->string('telefono_laboral_padre',10)->nullable();
            $table->string('extension_tel_laboral_padre',10)->nullable();
            $table->string('tipo_nomina_laboral_padre',30);
            $table->string('num_empleado_laboral_padre',30);
            $table->string('num_plaza_laboral_padre',30);
            $table->string('nivel_salarial_laboral_padre',50);
            $table->string('seccion_sindical_laboral_padre',150);
            $table->string('horario_ent_laboral_padre',10);
            $table->string('horario_sal_laboral_padre',10);
            $table->string('dias_laborales_padre',100)->nullable();
            $table->string('nombre_segundo_empleo',200)->nullable();
            $table->string('horario_ent_laboral_segundo_empleo',30)->nullable();
            $table->string('horario_sal_laboral_segundo_empleo',30)->nullable();
            $table->string('dias_laborales_segundo_empleo',100)->nullable();
            $table->string('telefono_laboral_segundo_empleo',10)->nullable();
            $table->string('extension_tel_laboral_segundo_empleo',10)->nullable();
            $table->string('domicilio_laboral_segundo_empleo',200)->nullable();
            $table->string('num_domicilio_laboral_segundo_empleo',50)->nullable();
            $table->string('colonia_laboral_segundo_empleo',150)->nullable();
            $table->string('alcaldia_laboral_segundo_empleo',150)->nullable();
            $table->string('codigo_postal_laboral_segundo_empleo',5)->nullable();
            $table->string('ciclo_escolar',30);
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
        Schema::dropIfExists('datos_repositorio_final_pre');
    }
}
