<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasAutorizadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas_autorizadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('datos_repositorio_final_pre_id')->nullable();
            $table->foreign('datos_repositorio_final_pre_id')->references('id')->on('datos_repositorio_final_pre')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('datos_repositorio_final_reins_id')->nullable();
            $table->foreign('datos_repositorio_final_reins_id')->references('id')->on('datos_repositorio_final_reins')->onDelete('restrict')->onUpdate('restrict');
            /** datos de la persona autorizada 1 */
            $table->string('nombre_comple_person_autorizada', 100);
            $table->string('entidad_nac_person_autorizada', 150);
            $table->string('fecha_nac_person_autorizada', 30);
            $table->string('edad_person_autorizada', 3);
            $table->string('genero_person_autorizada', 10);
            $table->string('curp_person_autorizada', 18);
            $table->string('nivel_escol_person_autorizada', 30);
            $table->string('concluido_nivel_esc_person_autorizada', 30);
            $table->string('parentesco_nino_person_autorizada', 30);
            $table->string('domicilio_calle_person_autorizada', 200);
            $table->string('numero_domicilio_person_autorizada', 50);
            $table->string('colonia_person_autorizada', 150);
            $table->string('alcaldia_person_autorizada', 150);
            $table->string('codigo_postal_person_autorizada', 5);
            $table->string('tel_particular_person_autorizada', 10);
            $table->string('tel_celular_person_autorizada', 10);
            $table->string('email_person_autorizada', 150);
            $table->string('ocupacion_person_autorizada', 30);
            $table->string('domicilio_laboral_calle_person_autorizada', 150);
            $table->string('numero_domicilio_laboral_person_autorizada', 50);
            $table->string('colonia_laboral_person_autorizada', 150);
            $table->string('alcaldia_laboral_person_autorizada', 150);
            $table->string('codigo_postal_laboral_person_autorizada', 5);
            $table->string('tel_laboral_person_autorizada', 10);
            $table->string('extension_tel_laboral_person_autorizada', 10);
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
        Schema::dropIfExists('personas_autorizadas');
    }
}
