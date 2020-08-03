<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inscripcion extends Model
{
    protected $table = 'inscripcion_menor';
    protected $fillable = [
        'nombre_tutor_madres', 'apellido_paterno_tutor', 'apellido_materno_tutor',
        'calle','numero_domicilio','colonia','alcaldia','codigo_postal', 'tipo_nomina_1', 'num_empleado_1', 'num_plaza_1', 'clave_dependencia_1', 'nivel_salarial_1', 'seccion_sindical_1',
         'email_correo', 'telefono_celular', 'telefono_3','horario_laboral_ent','horario_laboral_sal',
        'nombre_menor_1', 'apellido_paterno_1', 'apellido_materno_1', 'curp_num', 'birthday', 'Edad_menor', 'caci','correo_enviado'
    ];
    protected $guarded = ['id'];
    public $timestamps = false;

    public static function setDoc($uploadedFile, $id_inscri)
    {
        $data = [];
        //verifica que exista los archivos
        if ($uploadedFile) {
            //recorre los arreglos hijos
            foreach ($uploadedFile as $value) {
                //recorre los valor del arreglo hijo
                foreach ($value as $valueNombreTramite) {
                    //procesa el archivo
                    if(!is_string($valueNombreTramite)){
                        //dd($valueNombreTramite);
                        $filename = time() . ' ' . $valueNombreTramite->getClientOriginalName();
                        //guarda en sistema de archivos
                        $valueNombreTramite->move('uploads/documentos', $filename);
                        //inserta en la bd
                        $data['nombre'] = $filename;
                    }else{
                        //procesa el nombre del tramite
                        //dd($valueNombreTramite);
                        $data['nombre_tramite'] = $valueNombreTramite;
                        $data['inscripcion_menor_id'] = $id_inscri;
                        $data['created_at'] = now();
                        Documentos::create($data);
                    }
                }
            }
            return true;
        } else {
            return false;
        }
    }
    public static function insertFlagEnvioEmail($id){
        DB::table('inscripcion_menor')
                ->where('id', $id)
                ->update(['correo_enviado' => 1]);
    }
}
