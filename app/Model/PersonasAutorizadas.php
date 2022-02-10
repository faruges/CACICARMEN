<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PersonasAutorizadas extends Model
{
    protected $table = 'personas_autorizadas';
    protected $fillable = [
        'datos_repositorio_final_pre_id',
        'datos_repositorio_final_reins_id',
        'nombre_comple_person_autorizada',
        'entidad_nac_person_autorizada',
        'fecha_nac_person_autorizada',
        'edad_person_autorizada',
        'genero_person_autorizada',
        'curp_person_autorizada',
        'nivel_escol_person_autorizada',
        'concluido_nivel_esc_person_autorizada',
        'parentesco_nino_person_autorizada',
        'domicilio_calle_person_autorizada',
        'numero_domicilio_person_autorizada',
        'colonia_person_autorizada',
        'alcaldia_person_autorizada',
        'codigo_postal_person_autorizada',
        'tel_particular_person_autorizada',
        'tel_celular_person_autorizada',
        'email_person_autorizada',
        'ocupacion_person_autorizada',
        'domicilio_laboral_calle_person_autorizada',
        'numero_domicilio_laboral_person_autorizada',
        'colonia_laboral_person_autorizada',
        'alcaldia_laboral_person_autorizada',
        'codigo_postal_laboral_person_autorizada',
        'tel_laboral_person_autorizada',
        'extension_tel_laboral_person_autorizada',
        'created_at'
    ];
    protected $guarded = ['id'];
    public $timestamps = true;

    public static function updatePA($array,$id){
        DB::table('personas_autorizadas')
            ->where('id', $id)
            ->update($array);
    }
}
