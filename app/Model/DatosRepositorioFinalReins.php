<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatosRepositorioFinalReins extends Model
{
    protected $table = 'datos_repositorio_final_reins';
    protected $fillable = [
        'inscripcion_menor_id',
        'caci',
        'detec_nutricion',
        'fecha_preins',
        'matricula',
        'grupo_nino',
        'fecha_baja_nino',
        'fecha_cambio_caci',
        'nombre_comple_nino',
        'edad_nino',
        'curp_nino',
        'fecha_nac_nino',
        'genero_nino',
        'entidad_naci_nino',
        'anio_registro_nac_nino',
        'alcaldia_registro_nino',
        'num_acta_nac_nino',
        'libro_act_nac_nino',
        'domicilio_part_nino',
        'numero_domici_nino',
        'colonia_nino',
        'alcaldia_nino',
        'codigo_postal_nino',
        'telefono_recado_nino',
        'discapacidad_nino',
        'padecimiento_nino',
        'necesidades_nino',
        'institucion_nino',
        'derechohabiencia_nino',
        'alergia_nino',
        'grupo_sanguineo',
        'nombre_completo_padre',
        'rfc_padre',
        'curp_padre',
        'genero_padre',
        'entidad_nac_padre',
        'fecha_nac_padre',
        'edad_padre',
        'edo_civil_padre',
        'nivel_escolar_padre',
        'conclusion_nive_esco_padre',
        'parentesco_con_nino',
        'domicilio_calle_padre',
        'numero_domici_padre',
        'colonia_padre',
        'alcaldia_padre',
        'codigo_postal_padre',
        'tel_particular_padre',
        'tel_celular_padre',
        'tel_recados_padre',
        'email_padre',
        'clave_sector_padre',
        'ente_administrativo_padre',
        'nombre_unidad_administrativa_padre',
        'clave_unidad_admin_padre',
        'area_adscripcion_padre',
        'descripcion_puesto_padre',
        'funcion_real_padre',
        'domicilio_calle_laboral_padre',
        'num_laboral_padre',
        'colonia_laboral_padre',
        'alcaldia_laboral_padre',
        'codigo_postal_laboral_padre',
        'telefono_laboral_padre',
        'extension_tel_laboral_padre',
        'tipo_nomina_laboral_padre',
        'num_empleado_laboral_padre',
        'num_plaza_laboral_padre',
        'nivel_salarial_laboral_padre',
        'seccion_sindical_laboral_padre',
        'horario_ent_laboral_padre',
        'horario_sal_laboral_padre',
        'dias_laborales_padre',
        'nombre_segundo_empleo',
        'horario_ent_laboral_segundo_empleo',
        'horario_sal_laboral_segundo_empleo',
        'dias_laborales_segundo_empleo',
        'telefono_laboral_segundo_empleo',
        'extension_tel_laboral_segundo_empleo',
        'domicilio_laboral_segundo_empleo',
        'num_domicilio_laboral_segundo_empleo',
        'colonia_laboral_segundo_empleo',
        'alcaldia_laboral_segundo_empleo',
        'codigo_postal_laboral_segundo_empleo',
        'ciclo_escolar',
        'created_at'
    ];
    protected $guarded = ['id'];
    public $timestamps = true;

    public static function updateRepo($array,$id){
        DB::table('datos_repositorio_final_reins')
            ->where('id', $id)
            ->update($array);
    }
}
